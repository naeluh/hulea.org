<template>
  <div>
    <div> 
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
  data () {
    return {
      arr: []
    }
  },
  computed: {},
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
@import "../assets/scss/main";
div {
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