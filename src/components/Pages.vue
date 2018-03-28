<template>
  <div>
    <article class="background-content" v-for="(value, key, index) in this.arr" v-if="value.url === $route.params.id">
        <section class="offset60">
            <h1 contenteditable="false" id="title"></h1>
        </section>
        <section class="offset0">
            <div id="image" class="imgHero" v-bind:style="{ backgroundImage: 'url(' + /* require('@/assets/' + value.img) */ + ')' }"></div>
        </section>
        <section class="offset60_2">
            <h3><a contenteditable="false" id="link" target="_blank" v-bind:href="value.link"></a></h3>
            <p id="description" contenteditable="false" v-html="value.siteInfo"></p>
        </section>
        <section class="offset40">
            <a id="next" class="next"  v-bind:href="'/pages/' + getUrl(key)"><i class="fa fa-arrow-right" aria-hidden="true"><icon name="arrow-right" scale="3"></icon></i></a>
        </section>
    </article>
  </div>
</template>

<script>

export default {
  name: 'Pages',
  props: ['arr'],
  methods: {
    getUrl (id) {
      id = id += 1
      if (id >= this.data.arr.length) {
        id = 0
      }
      for (var i = this.data.arr.length - 1; i >= 0; i--) {
        if (id === Number(this.data.arr[i].id)) {
          return this.data.arr[i].url
        }
      }
    }
  },
  computed: {},
  mounted () {}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style lang="scss">
@import "../assets/scss/main";
</style>
