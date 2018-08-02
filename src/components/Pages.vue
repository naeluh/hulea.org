<template>
  <div>
    <article class="background-content" v-for="(value, key, index) in this.arr" v-if="value.field_url === $route.params.id">
        <section class="offset60">
            <h1 class="h1">{{value.title}}</h1>
        </section>
        <section class="offset0">
            <div class="imgHero" :style="{ backgroundImage: 'url( https://data.aiwinter.org/' +   value.field_image  + ')' }"></div>
        </section>
        <section class="offset60_2">
            <h3 v-html="value.field_link"></h3>
            <p id="description" v-html="value.body"></p>
        </section>
        <section class="offset40">
            <router-link class="next" :to="'/work/' + getUrl(key)"><i class="fa fa-arrow-right" aria-hidden="true"><icon name="arrow-right" scale="3"></icon></i></router-link>
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
      console.log(id)
      id = id += 1
      if (id >= this.arr.length) {
        id = 0
      }
      for (var i = this.arr.length - 1; i >= 0; i--) {
        if (id === Number(this.arr[i].id)) {
          return this.arr[i].field_url
        }
      }
    }
  },
  computed: {},
  mounted () {}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style lang="scss"></style>
