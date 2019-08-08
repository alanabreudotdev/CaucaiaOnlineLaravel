@extends('layouts.backend')
@section('content')
            <!-- Row -->
            <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">
							<div class="col-lg-3 col-sm-6">
								<div class="card card-sm">
									<div class="card-body">
										<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Reclamações</span>
										<div class="d-flex align-items-center justify-content-between position-relative">
											<div>
											<span class="d-block display-5 font-weight-400 text-dark">{{$totalReclamacoes}}</span>
											</div>
											<div class="position-absolute r-0">
												<span id="pie_chart_1" class="d-flex easy-pie-chart" data-percent="86">
													<span class="percent head-font">86</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card card-sm">
									<div class="card-body">
										<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Respondidas</span>
										<div class="d-flex align-items-center justify-content-between position-relative">
											<div>
												<span class="d-block">
												<span class="display-5 font-weight-400 text-dark"><span class="counter-anim">{{$totalRespondidas}}</span></span>
												</span>
											</div>
											<div class="position-absolute r-0">
												<span id="pie_chart_2" class="d-flex easy-pie-chart" data-percent="75">
													<span class="percent head-font">75</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card card-sm">
									<div class="card-body">
										<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Resolvido</span>
										<div class="d-flex align-items-end justify-content-between">
											<div>
												<span class="d-block">
												<span class="display-5 font-weight-400 text-dark">{{$totalResolvido}}</span>
													
												</span>
											</div>
											<div>
												<span class="text-success font-12 font-weight-600"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card card-sm">
									<div class="card-body">
										<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Não Respondidas</span>
										<div class="d-flex align-items-end justify-content-between">
											<div>
												<span class="d-block">
												<span class="display-5 font-weight-400 text-dark">{{$totalNaoRespondidas}}</span>
												</span>
											</div>
											<div>
												<span class="text-danger font-12 font-weight-600"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="hk-row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header ">
										<h6>Problemas + frequentes</h6>
										
									</div>
									<div class="card-body">
										<div class="button-list">
											@foreach($categoriasReclamacao as $catRcl)
												<button class="btn btn-primary btn-wth-icon btn-rounded icon-right btn-xs"><span class="btn-text">{{$catRcl->name}}</span> <span class="icon-label">{{$catRcl->total_reclamacoes}} </span></button>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header ">
										<h6>Gráfico</h6>
									</div>
									<div class="card-body">
										<div class="hk-legend-wrap mb-20">
										
											<div class="hk-legend">
												<span class="d-10 bg-blue-dark-1 rounded-circle d-inline-block"></span><span>Respondidas</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-green-dark-1 rounded-circle d-inline-block"></span><span>Finalizadas</span>
											</div>
											<div class="hk-legend">
													<span class="d-10 bg-yellow-dark-1 rounded-circle d-inline-block"></span><span>Não Respondidas</span>
												</div>
											
										</div>
										<div id="e_chart_9" class="echart" style="height:291px;"></div>
									</div>
								</div>
							</div>
							
						</div>
						
						<div class="card">
							<div class="card-body pa-0">
								<div class="table-wrap">
									<div class="table-responsive">
										<table class="table table-sm table-hover mb-0">
											<thead>
												<tr>
													<th>#ID</th>
													<th>Data</th>
													<th>Reclamante</th>
													<th>Titulo</th>
													<th>Categoria</th>
													<th>Respondido</th>
													<th>Resolvido</th>
													<th>Ações</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($ultimasReclamacoes as $rcl)
												<tr>
													<td>{{$rcl->id}}</td>
													<td>{{ \Carbon\Carbon::parse($rcl->created_at)->format('d/m/Y')}}</td>
													<td>{{$rcl->user->name}}</td>
													<td>{{$rcl->titulo}}</td>
													<td>{{$rcl->categories->name}}</td>
													<td>{!!($rcl->respondida==1)? '<span class="badge badge-success">Sim</span>' : '<span class="badge badge-danger">Não</span>'!!}</td>
													<td>{!!($rcl->resolvido==1)? '<span class="badge badge-success">Sim</span>' : '<span class="badge badge-danger">Não</span>'!!}</td>

												<td><a href="{{url('/gerenciador/reclamacao/'.$rcl->id)}}" class="btn btn-icon btn-icon-circle btn-pink btn-icon-style-3"><span class="btn-icon-wrap"><i class="fa fa-eye"></i></span></a></td>
												</tr>
												@endforeach
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>		
					</div>
                </div>
                <!-- /Row -->
    
@endsection

@section('js_after')
	<script>
		/*Dashboard2 Init*/
 
"use strict"; 
$(document).ready(function() {
	/*Toaster Alert
	$.toast({
		heading: 'Oh snap!',
		text: '<p>Change a few things and try submitting again.</p>',
		position: 'bottom-right',
		loaderBg:'#3a55b1',
		class: 'jq-toast-danger',
		hideAfter: 3500, 
		stack: 6,
		showHideTransition: 'fade'
	});
	*/
	if( $('#pie_chart_1').length > 0 ){
		$('#pie_chart_1').easyPieChart({
			barColor : '#3a55b1',
			lineWidth: 3,
			animate: 3000,
			size:	50,
			lineCap: 'square',
			scaleColor: '#f5f5f6',
			trackColor: '#f5f5f6',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
	}
	if( $('#pie_chart_2').length > 0 ){
		$('#pie_chart_2').easyPieChart({
			barColor : '#3a55b1',
			lineWidth: 3,
			animate: 3000,
			size:	50,
			lineCap: 'square',
			scaleColor: '#f5f5f6',
			trackColor: '#f5f5f6',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
	}
	
	var data = [],
	totalPoints = 300;

	/*Getting Random Data*/
	function getRandomData() {

		if (data.length > 0)
			data = data.slice(1);

		// Do a random walk

		while (data.length < totalPoints) {

			var prev = data.length > 0 ? data[data.length - 1] : 50,
				y = prev + Math.random() * 10 - 5;

			if (y < 0) {
				y = 0;
			} else if (y > 100) {
				y = 100;
			}

			data.push(y);
		}

		// Zip the generated y values with the x values

		var res = [];
		for (var i = 0; i < data.length; ++i) {
			res.push([i, data[i]])
		}

		return res;
	}
	
	/***Filled Line Chart***/
	if( $('#flot_line_chart_moving').length > 0 ){	
		/*Defining Option*/
		var fill_line_chartop = {
			series:{
				shadowSize: 0,
				lines: {
					fill: true
				},
			},
				grid: {
				color: "#fff",
				hoverable: true,
				borderWidth: 0,
				backgroundColor: 'transparent'
			},
			colors: ["#3a55b1"],
			tooltip: true,
			tooltipOpts: {
				content: "Y: %y",
				defaultTheme: false
			},
			yaxis: {
				show: true,
				color: '#6f7a7f',
				tickColor: 'transparent'
			},
			xaxis: {
				show: false
			}
		};
		
		/*Defining Data*/
		var fill_line_chart_data = {
			data: getRandomData(),
		}

		/*Chart Plot*/
		$.plot($("#flot_line_chart_moving"), [fill_line_chart_data], fill_line_chartop);
		
		/*Realtime Data*/
		setInterval(function updateRandom() {
			fill_line_chart_data = getRandomData();
			$.plot($("#flot_line_chart_moving"), [fill_line_chart_data], fill_line_chartop)
		}, 40);	
	}

	/***Line Chart***/
	if( $('.risk-switch').length > 0 )
		$('.risk-switch').toggles({
			drag: true, // allow dragging the toggle between positions
			click: true, // allow clicking on the toggle
			text: {
			on: '', // text for the ON position
			off: '' // and off
			},
			on: false, // is the toggle ON on init
			animate: 250, // animation time (ms)
			easing: 'swing', // animation transition easing function
			checkbox: null, // the checkbox to toggle (for use in forms)
			clicker: null, // element that can be clicked on to toggle. removes binding from the toggle itself (use nesting)
			
			type: 'compact' // if this is set to 'select' then the select style toggle will be used
		});
});

/*****E-Charts function start*****/
var echartsConfig = function() { 
	if( $('#e_chart_9').length > 0 ){
		var eChart_9 = echarts.init(document.getElementById('e_chart_9'));
		
		var option8 = {
			tooltip: {
				show: true,
				backgroundColor: '#fff',
				borderRadius:6,
				padding:6,
				axisPointer:{
					lineStyle:{
						width:0,
					}
				},
				textStyle: {
					color: '#324148',
					fontFamily: '"Poppins", sans-serif',
					fontSize: 12
				}	
			},
			series: [
				{
					name:'',
					type:'pie',
					radius : '60%',
					center : ['50%', '50%'],
					roseType : 'radius',
					color: [ '#0089e0', '#1aa23e', '#ffb71d'],
					data:[
						
						{value:{{$totalRespondidas}}, name:''},
						{value:{{$totalResolvido}}, name:''},
						{value:{{$totalNaoRespondidas}}, name:''},
						
					],
					label: {
						normal: {
							formatter: '{b}\n{d}%'
						},
				  
					}
				}
			]
		};
		eChart_9.setOption(option8);
		eChart_9.resize();
	}
}
/*****E-Charts function end*****/

/*****Resize function start*****/
var echartResize;
$(window).on("resize", function () {
	/*E-Chart Resize*/
	clearTimeout(echartResize);
	echartResize = setTimeout(echartsConfig, 200);
}).resize(); 
/*****Resize function end*****/

/*****Function Call start*****/
echartsConfig();
/*****Function Call end*****/
</script>
@endsection