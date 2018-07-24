<template>
<footer>
	<div>
    <p class="bold mb1">Kristin Friedrich</p>
    <p>CONTACT :  <a target="_blank" title="Contact" alt="Contact" href="mailto:kfriedrich990@gmail.com">kfriedrich990@gmail.com</a></p>
    <p>LINKEDIN :  <a target="_blank" title="LINKEDIN" alt="LINKEDIN" href="https://www.linkedin.com/in/kristin-friedrich/">https://www.linkedin.com/in/kristin-friedrich/</a></p>
 <!--   <p> <a target="_blank" title="resume" alt="resume" href="/resume">Resume</a></p>
    <p> <a target="_blank" title="writing" alt="writing" href="/writing">Writing</a></p> -->
	</div>
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

  footer > div:nth-child(1) > p:nth-child(1) {
    font-weight:900;
    margin-bottom:1rem;
  }

	*, a {
		color: #fff;
    line-height: 150%;
	}

	background-color:green;

    @include grid-container;

    margin-top: 2rem;

    padding: 2rem 0;
  
    div {

    	margin-bottom: 2rem; 

      	@include grid-column(6, $grid);

      	@include grid-media($grid--tablet) {
       		@include grid-column(12);
      	}
    
    }

}
</style>