<template>
  <div>
    <article class="background-content" v-for="(value, key, index) in this.arr">
         <section v-if="value.status === 'On'" class="offset0">
            <router-link :to="'work/' + value.field_url" class="imgHero" :style="{ backgroundImage: 'url( https://data.aiwinter.org/' +   value.field_image  + ')' }">
              <h1 class="h1">{{value.title}}</h1>
            </router-link>
        </section>
    </article>
  </div>
</template>

<script>
// import store from '../store'

export default {
  name: 'Work',
  props: ['arr'],
  methods: {},
  computed: {},
  mounted () {}
}
</script>


<style lang="scss" scoped>
.imgHero {
  position: relative;
  .h1 {
    margin-right: 20px;
    color:#fff;
    position: absolute;
    bottom: 0;
    right: 0;
    text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;
  }
}
</style>
