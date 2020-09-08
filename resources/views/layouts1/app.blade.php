<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset("assets/app.css") }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />  
		<script src="{{ asset('assets/app.js') }}"></script>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed {{ _config('body').' '._config('body-size') }}">
        <div class="wrapper">
            @include('partials.nav')
            @include('partials.aside')
            <div class="content-wrapper">
                <section class="content">
                    <div class="container-fluid">
                        <br> 
                        <div class="card card-outline card-{{ _config('card-color') }} web-card">
                            <div class="card-header">BOUWA TECHNOLOGIE</div>
                        </div>
                        <div class="row"> @yield("content") </div>
                    </div>
                </section>
            </div>     

            @include('partials._modal')
			<footer class="main-footer">
			  	<span>Copyright &copy; {{ date('Y') }} Tous droits reservés.</span>
			  	<div class="float-right d-none d-sm-inline-block">GIGA TECHNOLOGIE</div>
			</footer>
			<aside class="control-sidebar control-sidebar-dark"></aside>
		</div>
		<script>$.widget.bridge('uibutton', $.ui.button)</script>
        @include('partials.js')
        <script>
            am4core.useTheme(am4themes_animated);
            var chart = (d, _id) => {
                console.log(_id);
                var char = am4core.create(_id, am4charts.XYChart);
                g.paddingBottom = 30;

                var data = [];
                for(i of d) {
                    data.push({"name": i.prenom+' '+i.nom, "steps": i.montant, 'photo': i.photo});
                }
                g.data = data;

                ategoryAxis.dataFields.category = "name";
                categoryAxis.renderer.grid.template.strokeOpacity = 0;
                categoryAxis.renderer.minGridDistance = 10;
                categoryAxis.renderer.labels.template.dy = 35;
                categoryAxis.renderer.tooltip.dy = 35;

                var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                valueAxis.renderer.inside = true;
                valueAxis.renderer.labels.template.fillOpacity = 0.3;
                valueAxis.renderer.grid.template.strokeOpacity = 0;
                valueAxis.min = 0;
                valueAxis.cursorTooltipEnabled = false;
                valueAxis.renderer.baseGrid.strokeOpacity = 0;

                var series = chart.series.push(new am4charts.ColumnSeries);
                series.dataFields.valueY = "steps";
                series.dataFields.categoryX = "name";
                series.dataFields.categoryY = "photo";
                series.tooltipText = "{valueY.value}";
                series.tooltip.pointerOrientation = "vertical";
                series.tooltip.dy = - 6;
                series.columnsContainer.zIndex = 100;

                var columnTemplate = series.columns.template;
                columnTemplate.width = am4core.percent(50);
                columnTemplate.maxWidth = 66;
                columnTemplate.column.cornerRadius(60, 60, 10, 10);
                columnTemplate.strokeOpacity = 0;

                series.heatRules.push({ target: columnTemplate, property: "fill", dataField: "valueY", min: am4core.color("#e5dc36"), max: am4core.color("#5faa46") });
                series.mainContainer.mask = undefined;

                var cursor = new am4charts.XYCursor();
                chart.cursor = cursor;
                cursor.lineX.disabled = true;
                cursor.lineY.disabled = true;
                cursor.behavior = "none";

                var bullet = columnTemplate.createChild(am4charts.CircleBullet);
                bullet.circle.radius = 30;
                bullet.valign = "bottom";
                bullet.align = "center";
                bullet.isMeasured = true;
                bullet.interactionsEnabled = false;
                bullet.verticalCenter = "bottom";

                var hoverState = bullet.states.create("hover");

                var outlineCircle = bullet.createChild(am4core.Circle);
                outlineCircle.adapter.add("radius", function (radius, target) {
                    var circleBullet = target.parent;
                    return circleBullet.circle.pixelRadius + 10;
                })

                var image = bullet.createChild(am4core.Image);
                image.width = 60;
                image.height = 60;
                image.horizontalCenter = "middle";
                image.verticalCenter = "middle";

                image.adapter.add("href", function (href, target) {
                    var dataItem = target.dataItem;
                    if (dataItem) {
                        return "{{ asset('img/"+dataItem.categoryY+"') }}";
                    }
                })


                image.adapter.add("mask", function (mask, target) {
                    var circleBullet = target.parent;
                    return circleBullet.circle;
                })

                var previousBullet;
                chart.cursor.events.on("cursorpositionchanged", function (event) {
                    var dataItem = series.tooltipDataItem;

                    if (dataItem.column) {
                        var bullet = dataItem.column.children.getIndex(1);

                        if (previousBullet && previousBullet != bullet) {
                            previousBullet.isHover = false;
                        }

                        if (previousBullet != bullet) {

                            var hs = bullet.states.getKey("hover");
                            hs.properties.dy = -bullet.parent.pixelHeight + 30;
                            bullet.isHover = true;

                            previousBullet = bullet;
                        }
                    }
                })
            }

            $.ajax({
                url: '{{ route('projets.details') }}',
                type: "GET",
                data: {'data': 1, '_token':"{{ csrf_token() }}"},
                dataType: "json",
                success:function (projects) {
                    for(project of projects) {
                        $.ajax({
                            url: '{{ route('contributions.details') }}',
                            type: "GET",
                            data: {'id': project.id, '_token':"{{ csrf_token() }}"},
                            dataType: "json",
                            success:function (data) {
                                console.log(data);
                                if(data != []) {
                                    chart(data, '_project'+data[0].projet_id);
                                }

                            },
                            error:function () { console.log('erreur') },
                            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                        })
                    }
                },
                error:function () { console.log('erreur') },
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            })

        </script>
        <script>
            initSample();
            CKEDITOR.replace('_create-desc');
            CKEDITOR.replace('_edit-desc');
        </script>
	</body>
</html>

    
