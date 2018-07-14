<template>
  <main class="container" role="main">
    <article>

      <section>
        <h1 class="heading">Kristin Friedrich</h1>
      </section>

      <section class="full-width">
         <figure>
          <img :src="require('@/assets/cat_1.jpeg')"/>
        </figure> 
        <h2>Kristin Friedrich</h2>
        <p>Turkey chicken pancetta sirloin spare ribs pig, beef ribs drumstick biltong tri-tip jerky pork loin. Spare ribs brisket buffalo tenderloin flank pancetta kielbasa, frankfurter alcatra boudin turducken. Corned beef ground round bresaola pastrami, pork ribeye capicola bacon kielbasa.</p>
        <figure>
            <img :src="require('@/assets/cat_2.jpeg')"/>
          <figcaption>Fig1. - The Pulpit Rock, Norway.</figcaption>
        </figure> 
        <p>Turkey chicken pancetta sirloin spare ribs pig, beef ribs drumstick biltong tri-tip jerky pork loin. Spare ribs brisket buffalo tenderloin flank pancetta kielbasa, frankfurter alcatra boudin turducken. Corned beef ground round bresaola pastrami, pork ribeye capicola bacon kielbasa.</p>
      </section>

      <section class="full-width">
        <iframe :src="require('@/assets/friedrich_k_resume.pdf')" frameborder="0"></iframe>
      </section>

      <section>
         <figure>
          <img :src="require('@/assets/cat_1.jpeg')"/>
        </figure> 
        <h2>Kristin Friedrich</h2>
        <p>Turkey chicken pancetta sirloin spare ribs pig, beef ribs drumstick biltong tri-tip jerky pork loin. Spare ribs brisket buffalo tenderloin flank pancetta kielbasa, frankfurter alcatra boudin turducken. Corned beef ground round bresaola pastrami, pork ribeye capicola bacon kielbasa.</p>
        <figure>
            <img :src="require('@/assets/cat_2.jpeg')"/>
          <figcaption>Fig1. - The Pulpit Rock, Norway.</figcaption>
        </figure> 
        <p>Turkey chicken pancetta sirloin spare ribs pig, beef ribs drumstick biltong tri-tip jerky pork loin. Spare ribs brisket buffalo tenderloin flank pancetta kielbasa, frankfurter alcatra boudin turducken. Corned beef ground round bresaola pastrami, pork ribeye capicola bacon kielbasa.</p>
      </section>
      <aside>
        <figure>
            <img :src="require('@/assets/cat_3.jpeg')"/>
          <figcaption>Fig1. - The Pulpit Rock, Norway.</figcaption>
        </figure> 
        <p>Turkey chicken pancetta sirloin spare ribs pig, beef ribs drumstick biltong tri-tip jerky pork loin. </p>
      </aside>
    </article>
  </main>
</template>

<script>
export default {
  name: 'About',
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

$grid--phone: (
  columns: 12,
  gutter: 2rem,
  media: "(max-width: 414px)",
);

.heading {
  margin: 2rem 0;
  font-size: 2rem;
}

img {
  width:100%;
  height:auto;
}

figcaption {
  margin-top:1rem;
  color:#888;
  font-size:75%;
}

figure {
  margin-bottom:2rem;
}

main {

  //@include grid-container;

  header {

    margin-left:2rem;

    h1 {
      font-size:450%;
      padding-top:2rem;
      margin-bottom:2rem;
    }

  }

  article{

    @include grid-container;
  
    section {

      @include grid-column(8, $grid);

      @include grid-media($grid--tablet) {
        @include grid-column(12);
      }
    
    }

     .full-width {

      iframe {
        width: 100%;
        margin: 2rem 0;
        height: 55vh;
      } 

      @include grid-column(12, $grid);

      @include grid-media($grid--tablet) {
        @include grid-column(12);
      }
    
    }
    
    aside {

      p {
        line-height: 2;
      }
      
      @include grid-column(4, $grid);

      @include grid-media($grid--tablet) {
        @include grid-column(4);
      }

      @include grid-media($grid--phone) {
        @include grid-column(6);
      }
    
    }

  }
}

</style>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>