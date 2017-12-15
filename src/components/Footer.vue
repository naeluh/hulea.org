<template>
<footer>
	<div>
    <p>A. I. Winter</p>
    <p>Contact: <a target="_blank" title="Contact" alt="Contact" href="mailto:aiwinter@gmail.com">aiwinter@gmail.com</a>.</p>
    <p>Github: <a target="_blank" title="Github" alt="Github" href="https://github.com/aiwinter">https://github.com/aiwinter</a></p>
    <p> <a target="_blank" title="About" alt="About" href="/about">About</a>.</p>
    <p> <a target="_blank" title="Help" alt="Help" href="/help">Help</a>.</p>
	</div>
	<div></div>
	<div></div>
</footer>
</template>


<script>
export default {
  name: 'Footer',
  data () {
    return {}
  },
  methods: {},
  created () {}
}
</script>

<style lang="scss" scoped>
@import "bourbon";
@import "neat";

$grid: (
  columns: 12,
  gutter: 2rem,
);

$inner--grid: (
  columns: 12,
  gutter: 2rem,
);


$grid--tablet: (
  columns: 12,
  gutter: 2rem,
  media: "(max-width: 768px)",
);

footer {

	*, a {
		color: #fff;
	}

	background-color: #000;

    @include grid-container;

    margin-top: 2rem;

    padding: 2rem 0;
  
    div {

    	margin-bottom: 2rem; 

      	@include grid-column(4, $grid);

      	@include grid-media($grid--tablet) {
       		@include grid-column(12);
      	}
    
    }

}
</style>