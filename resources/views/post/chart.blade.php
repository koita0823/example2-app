<x-layout title="TOP | NikoLog"> 
    @auth 
        <x-layout.single>
            <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
                NikoLog
            </h2>
            <a href="/post">
                <x-element.button>戻る</x-element.button>
            </a>
            <div id="myChart" style="height:500px;width:800px;"></div>
            <script src="https://www.gstatic.com/charts/loader.js"></script> 
            <script type="text/javascript">
                 
	            google.charts.load('current', {packages: ['corechart']});
	            google.charts.setOnLoadCallback(drawChart);
 
	            function drawChart(){
 
		            var data=google.visualization.arrayToDataTable([
                        ['name', 'number'],
                        
                        @php
					        foreach($posts as $post){
						    echo "['".$post->feeling->name."', ".$post->count_feelingId."],";
					        }
				        @endphp
		                ]);
 
		        var options ={
			        title: 'ムードチャート',
                    is3D: true,
		        };
 
		        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
 
		        chart.draw(data, options);
	            }
            </script>	
        </x-layout.single>
    @endauth                       
</x-layout>  
