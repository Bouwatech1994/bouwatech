am4core.useTheme(am4themes_animated);

var chart = am4core.create("chartdiv", am4charts.PieChart);
$.ajax({
    url: 'state',
    type: "POST",
    data: {'birth': 1},
    dataType: "json",
    success:function (content) {
        $('#patient').text(content.homme+content.femme);
        $('#lit').text(content.libre);
        $('#hospitalisation').text(content.hospitalisation);
        $('#consultation').text(content.consultation);
        $('#facture').text(content.facture);
        $('#rendez_vous').text(content.rendez_vous);
        chart.data = [{ "genre": "Homme", "nbre": content.homme }, { "genre": "Femme", "nbre": content.femme }];

        var series = chart.series.push(new am4charts.PieSeries());
        series.dataFields.value = "nbre";
        series.dataFields.category = "genre";
        // this creates initial animation
        series.hiddenState.properties.opacity = 1;
        series.hiddenState.properties.endAngle = -90;
        series.hiddenState.properties.startAngle = -90;

        chart.legend = new am4charts.Legend();
    },
    error:function () { console.log('erreur') },
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
})
