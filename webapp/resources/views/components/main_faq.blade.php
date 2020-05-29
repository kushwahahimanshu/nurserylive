<!-- breadcrumb start -->
<div class="breadcrumb-main ">
<div class="container">
<div class="row">
<div class="col">
<div class="breadcrumb-contain">
<div>
<h2>Faq</h2> 
</div>
</div>
</div>
</div>
</div>
</div>
<!-- breadcrumb End -->
<style>
	.accordion {
	  background-color: #eee;
	  color: #444;
	  cursor: pointer;
	  padding: 18px;
	  width: 100%;
	  border: 2px white;
	  text-align: left;
	  outline: none;
	  font-size: 15px;
	  transition: 0.4s;
	}

	.active, .accordion:hover {
	  background-color:white; 
	}

	.panel {
	  padding: 0 18px;
	  display: none;
	  background-color: white;
	  overflow: hidden;
	}
</style>

<section class="faq-section section-big-py-space bg-light">
<div class="container">
<div class="row">
<div class="col-sm-12">
<?php $count = 1; ?>
@foreach($faq as $r)
 <button class="accordion">{{ $count++ }} . {{ $r->question }}?</button>
<div class="panel">
  <p>{{ $r->answer }}</p>
</div> 
@endforeach 
</div>
</div>
</div>
</div>
</section>  

<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
	    this.classList.toggle("active");
	    var panel = this.nextElementSibling;
	    if (panel.style.display === "block") {
	      panel.style.display = "none";
	    } else {
	      panel.style.display = "block";
	    }
	  });
	}
</script>