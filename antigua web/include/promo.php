<body onLoad="$('.promots').trigger('click');">

	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

	<script type="text/javascript">
		$(document).ready(function() {
			$(".promots").fancybox({
				'titlePosition'		: 'inside',
            	'transitionIn': 'fade',<!--none-->
            	'transitionOut': 'fade',<!--none-->
            	'autoScale': true,
			});
		});
	</script>
    
<div id="content">
<a class="promots" href="#inline1"></a>

  <div style="display: none;">
	<div id="inline1" style="width:600px;">
    	<img src="/images/10desconto.gif" alt="desconto pacotes" style="width:100%;">
   </div>
  </div>