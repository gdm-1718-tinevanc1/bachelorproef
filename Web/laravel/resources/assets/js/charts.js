new Morris.Bar({
    // ID of the element in which to draw the chart.
    element: 'usersByMonths',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: usersByMonths,
    // The name of the data record attribute that contains x-values.
    xkey: 'month',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['total'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Totaal'],
    barColors:['#5F4B59']
});

new Morris.Bar({
    // ID of the element in which to draw the chart.
    element: 'usersByRoles',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: usersByRoles,
    // The name of the data record attribute that contains x-values.
    xkey: 'role',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['total'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Totaal'],
    barColors:['#5F4B59']
});

