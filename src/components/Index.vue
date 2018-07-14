<template>
  <main class="container" role="main">
    <article>
      <section><h1>Kristin Friedrich</h1></section>
      <About></About>
      </article>
  </main>
</template>

<script>
export default {
  name: 'Index',
  data () {
    return {
      arr: []
    }
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

.container {
    @include grid-container;
    color: green;

    article {
        position: relative;
        height: 100vh;
        //width: 100vw;

        section {
            width: 89%;
            height: 20%;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;

            h1 {
                padding: 48px;
                padding: 40px 0;
                font-weight: 900;
                font-size: 545%;
                text-align: center;
                width: 100%;

                @include grid-media($grid--tablet) {
                  font-size: 345%;
                }

                @include grid-media($grid--phone) {
                  font-size: 185%;
                }
            }


        }
    }
}

</style>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>