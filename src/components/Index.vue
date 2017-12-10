<template>
  <main class="container" role="main">
    <article><section><h1>  [{A.I. Winter}] </h1></section></article>
  </main>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Index',
  data () {
    return {
      arr: []
    }
  },
  methods: {
    get (params) {
      console.log(this.$route)
      const uri = this.$route.params.id
      return axios.get(`https://nhm.org/nature/map/map/searchobservations?params[project_id]=` + uri)
      .then((res) => {
        this.arr = res.data
      })
    }
  },
  created () {
    this.get()
  }
}
</script>

<style lang="scss" scoped>

</style>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>