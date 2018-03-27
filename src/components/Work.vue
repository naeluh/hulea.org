<template>
  <div>
    <article class="background-content" v-for="(value, key, index) in this.arr">
        <section class="offset60">
            <h1>{{value.title}}</h1>
        </section>
        <section class="offset0">
            <div id="image" class="imgHero" :style="{ backgroundImage: 'url( https://data.aiwinter.org/' +   value.field_image  + ')' }"></div>
        </section>
    </article>
  </div>
</template>

<script>

export default {
  name: 'Work',
  props: ['arr'],
  methods: {},
  computed: {},
  mounted () {}
}
</script>


<style lang="scss"></style>
