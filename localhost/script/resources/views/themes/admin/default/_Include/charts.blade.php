<script type="text/javascript">
@if(str_contains(url()->current(), '/admin/panel'))

    var users =  <?php echo json_encode($users) ?>;
    Highcharts.chart("users",{title:{text:""},subtitle:{text:""},xAxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},yAxis:{title:{text:"Number of New Users"}},legend:{layout:"vertical",align:"right",verticalAlign:"middle"},plotOptions:{series:{allowPointSelect:!0}},series:[{name:"New Users",data:users}],responsive:{rules:[{condition:{maxWidth:500},chartOptions:{legend:{layout:"horizontal",align:"center",verticalAlign:"bottom"}}}]}});

    @foreach($get_routes as $route)
       @if($route->for=="User")
    <?php $name = $route->name;?>
    var <?php echo "$name"; ?>s =  <?php echo json_encode($$name) ?>;
    Highcharts.chart("<?php echo "$name"; ?>s",{title:{text:""},subtitle:{text:""},xAxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},yAxis:{title:{text:"Number of New"}},legend:{layout:"vertical",align:"right",verticalAlign:"middle"},plotOptions:{series:{allowPointSelect:!0}},series:[{name:"New",data:<?php echo "$name"; ?>s}],responsive:{rules:[{condition:{maxWidth:500},chartOptions:{legend:{layout:"horizontal",align:"center",verticalAlign:"bottom"}}}]}});

       @endif
    @endforeach  

@endif
</script>
