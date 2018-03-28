<template>
  <div>
<div class="content-wrapper">
  <div class="columns is-mobile is-centered">
    <div class="column">
        <h1 class="title">Welcome !</h1>
        <p>Hello you have arrived at the website of Nick Hulea !</p>
        <p>Samples of my work can be found <a href="work" title="work" alt="work" target="_blank">here .</a></p>
        <p>If you would like to contact me or if you have any questions click <a href="contact" title="contact" alt="contact" target="_blank">here .</a>
        </p>
    </div>
  </div>
</div>
    <div id="wrap">
      <div id="block">
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'Index',
  props: ['arr'],
  methods: {
    getRandomArbitrary: function (min, max) {
      return Math.random() * (max - min) + min
    },
    color: function () {
      return '#' + Math.random().toString(16).slice(2, 8).toUpperCase()
    },
    block: function (ele) {
      const e = document.getElementById(ele)
      const r = this.getRandomArbitrary(1.3432, 70.6546)
      e.style.transform = 'rotate3d(1, 1, 1, ' + r + 'deg)'
      e.style.webkitTransform = 'rotate3d(1, 1, 1, ' + r + 'deg)'
      e.style.backgroundColor = this.color()
    }
  },
  mounted () {
    this.block('block')
  }
}
</script>

<style lang="scss" scoped>
div {
  position:relative;
  .content-wrapper {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  overflow: hidden;
  #wrap {
    #block {

    }
  }
}

</style>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>