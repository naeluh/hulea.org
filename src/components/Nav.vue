<template>
    <div v-bind:class="{ 'hide-overlay': this.data.isActive }">
      <nav>
          <ul v-on:click="toggleClass()">
            <li class="list one"></li>
            <li class="list one"></li>
            <li class="list one"></li>
          </ul>
      </nav>
      <div class="overlay">
          <div class="overlay-content">
              <div id="close" v-on:click="toggleClass()"><span>close</span></div>
              <ul id="weblist">
              	<li style="background-color: rgb(17, 17, 17);height:33%;" v-for="(value, key, index) in this.data.arr" v-bind:data="key"><a v-bind:href="value.link"><p>{{value.title}}</p></a></li>
              </ul>
          </div>
      </div>
    </div>
</template>

<script>
import navItems from '../assets/data/nav.json'

export default {
  name: 'Nav',
  data () {
    return {
      data: {
        arr: navItems,
        isActive: true
      }
    }
  },
  methods: {
    toggleClass () {
      this.data.isActive = !this.data.isActive
    }
  }
}
</script>


<style lang="scss" scoped>
li {
  background-color: green;
}
</style>
