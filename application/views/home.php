
<?php
if(!isset($list) && empty($nodes))
{
?>

<!-- Home page -->
	<!-- Banner -->
	<div id="cityscape" class="row">
		<div class="tagline col-md-12 col-lg-12">
			<h2>The freely accessible database of information on Kenyan entities</h2>
		</div>
		<div class="description col-md-12 col-lg-12">
			<h4>Providing citizens, journalists, and civic activists with a practical and easy-to-use tool to understand the ownership structure of the world they live in, demonstrating the practical applications of open information for normal citizens.</h4>
		</div>
	</div>
	 
	<!-- #cityscape -->

	<!-- Search -->
	<div id="search" class="row">
		<h2>Search</h2>
		<p><?php echo $error;?></p>
		<?php // echo language(); ?>
		<form name="oi" action="<?php echo base_url() . index_page();?>/homes/entitylist" method="post"> 
			<input type="text" name="search_name" value="" placeholder="Search by name, company or organisation" />
			<br />
			<input type="submit" name="submit" value="Go" class="btn btn-warning" />
		</form>
	</div> <!-- #search -->

	<!-- Stats and Latest -->
	<div id="datapop" class="row">

		<!-- Stats -->
		<div class="stats col-md-6 col-lg-6">
			<h3>In Our Database</h3>
			<div class="figures row">
				<div class="people col-md-2 col-lg-4">
					<a href="<?php echo base_url() . index_page();?>/homes/entityTypelist/22"><img class="img-responsive" src="<?php echo base_url(); ?>assets/img/people.png"></a>
					<h4>People</h4>
					<h5><?php echo $persons;?></h5>
				</div>
				<div class="tenders col-md-2 col-lg-4">
					<a href="<?php echo base_url() . index_page();?>/homes/entityDoclist/<?php echo $TendersID; ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/img/tenders.png"></a>
					<h4>Tenders</h4>
					<h5><?php echo $Tenders;?></h5>
				</div>
				<div class="organisations col-md-2 col-lg-4">
					<a href="<?php echo base_url() . index_page();?>/homes/entityTypelist/21"><img class="img-responsive" src="<?php echo base_url(); ?>assets/img/organisations.png"></a>
					<h4>Organisations</h4>
					<h5><?php echo $organisations;?></h5>
				</div>
			</div>
			<br />
			<div class="figures row">
				<div class="cases col-md-2 col-lg-4">
					<img class="img-responsive" src="<?php echo base_url(); ?>assets/img/cases.png">
					<h4><a href="<?php echo base_url() . index_page();?>/homes/entityDoclist/<?php echo $CasesID; ?>">Cases</a></h4>
					<h5><?php echo $Cases;?></h5>
				</div>
				<div class="grants col-md-2 col-lg-4">
					<a href="<?php echo base_url() . index_page();?>/homes/entityDoclist/<?php echo $ContractsID; ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/img/grants.png"></a>
					<h4>Contracts</h4>
					<h5><?php echo $Contracts;?></h5>
				</div>
				<div class="land col-md-2 col-lg-4">
					<a href="<?php echo base_url() . index_page();?>/homes/entityDoclist/<?php echo $LandID; ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/img/land.png"></a>
					<h4>Land</h4>
					<h5><?php echo $Land;?></h5>
				</div>
			</div>
		</div><!-- .stats -->

		<!-- Latest -->
		<div class="popular col-md-5 col-lg-6">
			<h3>Latest Entries</h3>
			<div class="topfive">
				<ol>
					
					<?php echo $latest_list;?>
				
				</ol>
			</div>
		</div><!-- .popular -->

		<!-- Disclaimer -->
		<div class="disclaimer col-md-9 col-lg-12">
			<p>
				Our database contains information on people, companies and organisations, as well as their linkages at specified periods of time.
				While we make every attempt to make this information as accurate as possible, we take no responsibility for its authenticity.
				The current information is derived from the Kenya Gazette and Handsards. We will be incorporating more information from different sources soon. 
			</p>
		</div><!-- .disclaimer -->
	</div> <!-- #datapop -->

	<!-- Partners -->
	<div id="partners" class="row">
		<h2>Launched in partnership with</h2>
		<div id="partner-logos">
			<a href="http://www.africatti.org/" target="blank">
				<img class="img-responsive" src="<?php echo base_url(); ?>assets/img/atti-logo.jpg" style="margin-left:-10px;">
			</a>
			<a href="http://www.kenyalaw.org/" target="blank">
				<img class="img-responsive" src="<?php echo base_url(); ?>assets/img/klr-logo.jpg">
			</a>
		</div>
	</div><!-- #partners -->

<?php 
}

if (isset($list))
{	
?>

<!-- Results -->
	<div id="search-results" class="col-md-6 col-lg-6">
		<h2>Search results</h2>
	</div>
	<!-- Search -->
	<div class="query pull-right" style="padding-top: 80px; padding-right: 10px;">
		<form name="oi" action="<?php echo base_url() . index_page();?>/homes/entitylist" method="post"> 
			<input type="text" name="search_name" value="" placeholder="Search by name, company or organisation" />
			<input type="submit" name="submit" value="Go" class="btn btn-warning" />
		</form>
	</div> <!-- #search -->

<?php 
	echo "
	<div id='content'>
		<div class='results col-md-11 col-lg-12' >
			$list
		</div>
		<div class='navigation col-md-12 col-lg-12 text-center' id='pagination'>
		    <div class='previous-posts'><a href='". base_url() . index_page() ."/homes/".$func."/".$term ."/'>1</a></div>
		    <div class='next-posts'><a href='". base_url() . index_page() ."/homes/".$func."/".$term ."/'>2</a></div>
	      </div>
	 </div>";
	}

if (!empty($nodes)){	
 	//echo $tree;

?>

<!-- Visualisation & Timeline --> 

	<div id="visualisation">
		<div class="row" style="margin: 0">
			<div class="pull-left col-md-7 col-lg-7">
				<h2>Search results for "<?php echo $node_title; ?>"</h2>
			</div>
			<!-- Search -->
			<div class="query pull-right">
				<form name="oi" action="<?php echo base_url() . index_page();?>/homes/entitylist" method="post"> 
					<input type="text" name="search_name" value="" placeholder="Search by name, company or organisation" />
					<input type="submit" name="submit" value="Go" class="btn btn-warning" />
				</form>
			</div> <!-- #search -->
		</div>

		<!-- Visualisation -->
		<div id="container_vis" class="row" style="margin: 0">
			<div id="center-container" style=" background-color: white" class="col-md-8 col-md-offset-2 col-lg-offset-2 col-lg-8">
			  <canvas id="cy" width="740px" height="560px"></canvas>
			</div>
			<div id="right-container" class="col-md-offset-0 col-lg-offset-0 hide">
				<div class="inner-header"></div>
				<hr />
				<div class="inner-details col-md-11 col-lg-12"></div>
			</div>
		</div>
</div>
		<!-- Timeline -->

		<!-- <div id="mytimeline"></div> -->
<script type="text/javascript">
var targetEl=document.getElementById("cy");
var docElement=(document.compatMode=='CSS1Compat')? document.documentElement: document.body;

if (targetEl.setExpression){
targetEl.style.setExpression("width", "expression((docElement.clientWidth-120)/2+'px')");
}
</script>
  <script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/js/renderer.js"></script>
<script type="text/javascript">

     var data = {
     		nodes: <?php echo $nodes; ?>,
     		edges: <?php echo $edges; ?>
     		}
    
  // Initialise arbor
    var sys = arbor.ParticleSystem()
    sys.parameters({stiffness:900, repulsion:2000, gravity:false, dt:0.015})
    sys.renderer = Renderer("#cy", '<?php echo base_url() ;?>assets/img/');
    sys.graft(data);
    /*
    var nav = Nav("#nav")
    $(sys.renderer).bind('navigate', nav.navigate)
    $(nav).bind('mode', sys.renderer.switchMode)
    nav.init()*/
	function NodeStory(nodeid) {
	// abort any pending request
	//alert(nodeid);
	
	$( "#cy" ).attr({width: "600" , height: "600" });
	    /*clear result div*/
	   $(".inner-details").html('');
	    // setup some local variables
	    

	    $.ajax({
	      url: "<?php echo base_url();?>index.php/homes/node_data",
	      type: "POST",
	      data: {node: nodeid},
	     // async: false,
	      dataType: "json",
	     // contentType: "application/json",
	      success:function(d){
	      //	alert(d);
	      	d = JSON.parse(d);
		//  $("#entity_edit").html(data);
		//alert(d.data[1].header[0].Link);
		$('.inner-details').html("<ul/>");
		l = d.data[1].header[0].Link;
		pn = d.data[1].header[0].Name;
		pv = d.data[1].header[0].Verb.split("||");
		pt = d.data[1].header[0].EntPos.split("||");
		pm = d.data[1].header[0].EntMap.split(",");
		
				
		ed = d.data[1].header[0].E_D;
		extradata = d.data[1].header[0].ExtraData;
		extradata = rhtmlspecialchars(extradata);
		if (ed==1){
			$(".inner-details ul").append('<li>'+ extradata +'</li>');
		}
		//m = d.data[2].arraymap[0]._201.Verb;
		am = d.data[2].arraymap[0];
		
	
		$.each(d.data[0].posts, function(i,post){
			id = '_'+post.ID;
			//alert(id);
			//alert(am._201.Verb);
			e = post.EntMap;
			v = post.Verb;
			dc = post.EffectiveDate;
			p = post.EntPos;
			
			
			
			if (v == '0'){
			v='';
				m = am[id][0]['Verb'];
				dr = am[id][0]['Dated'];
				//alert(m);
				$.each(am, function(j,mv){
			 	v += 'was '+ m + ' on '+ dr+ '<br>';
			 	});
			 	
		  $(".inner-details ul").append('<li><span class="st-verb">'+ v +'</span> <span class="st-name">'+ post.Name +'</span></li>');			 	
			 } else {
			 
		  $(".inner-details ul").append('<li><span class="st-verb">'+ v +'</span> <span class="st-name">'+ post.Name +'</span><span class="st-verb"> '+ p +'</span></p><p><span class="st-date">Effected Date - '+ dc +'</span></li>');		
		  	}
			

		});
		
		  $(".inner-header").html('<h3><a href="'+ l +'">'+ pn +'</a></h3>');
		  $('#center-container').removeClass("col-md-offset-2 col-lg-offset-2").addClass("col-md-offset-0 col-lg-offset-0");
		  $('#right-container').removeClass("hide col-md-offset-0 col-lg-offset-0").addClass("col-md-4 col-lg-4");
		  

	      },
	      error: function(xhr, status, error) {
		 alert(xhr.error);
	       }
	    });

	}
	
function rhtmlspecialchars(str) {
 if (typeof(str) == "string") {
  str = str.replace(/&gt;/ig, ">");
  str = str.replace(/&lt;/ig, "<");
  str = str.replace(/&#039;/g, "'");
  str = str.replace(/&quot;/ig, '"');
  str = str.replace(/&amp;/ig, '&'); /* must do &amp; last */
  }
 return str;
 }
	/*

var events = [<?php // echo $events; ?>];
var sections = [<?php // echo $sections; ?>];

       var timeline1 = new Chronoline(document.getElementById("mytimeline"), events, {
		visibleSpan: DAY_IN_MILLISECONDS * 366,
		animated: true,
		tooltips: true,
		defaultStartDate: new Date(2012, 3, 5),
		sections: sections,
		sectionLabelAttrs: {'fill': '#997e3d', 'font-weight': 'bold'},
		labelInterval: isHalfMonth,
		hashInterval: isHalfMonth,
		scrollLeft: prevQuarter,
		scrollRight: nextQuarter,
		floatingSubLabels: false,
		});

	$('#to-today').click(function(){timeline1.goToToday();});
   */
</script>

<?php } ?>
