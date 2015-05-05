@extends('app')

@section('content')

	<div id="dashboard" class="dashboard">
		<div class="tile large-tile" style="background-image:url('{{ asset('/img/win10_2.jpg') }}');">
			<div class="tile-message">Window 10 Review</div>
		</div>
		<div class="tile-group">
			<div class="tile medium-tile" style="background-image:url('{{ asset('/img/win10.jpg') }}');"></div>
			<div class="tile medium-tile" style="background-image:url('{{ asset('/img/win10_way.jpg') }}');"></div>
		</div>
	</div>

	<script type="text/javascript">

		window.onload = function(){
			cal();
		};

		$(window).resize(function(){
			cal();
		});

		function cal(){
			var windowHeight = $(window).height();
			var windowWidth = $(window).width();

			var height = Math.ceil(windowHeight * (0.7));
			var width = $("#dashboard").width();

			var top = Math.ceil((windowHeight - height) / 2);
			var left = Math.ceil((windowWidth - width) / 2);

			$("#dashboard").css("height",height+"px");
			$("#dashboard").css("margin-top",top+"px");
			$("#dashboard").css("margin-left",left+"px");
		}

		// alert($(".dashboard"));
	</script>

@endsection
