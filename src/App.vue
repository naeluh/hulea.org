<template>
  <div id="app" class="Prose">
    <div v-if="$store.getters.loading" id="load-component"><div class="parent"><div class="child">Loading ...</div></div></div>
  	<Nav v-if="!$store.getters.loading" v-cloak></Nav>
    <router-view v-if="!$store.getters.loading" :arr="this.$store.state.site" v-cloak></router-view>
  </div>
</template>

<script>
import store from './store'

export default {
  name: 'app',
  props: ['arr'],
  created () {
    store.dispatch('LOAD_DATA', this.$route)
  }
}
</script>

<style>
</style>

<style lang="scss" scoped>
#load-component {
  position: fixed;
  height: 100vh;
  width: 100vw;

  .parent {
  	position: relative;
  	position: relative;
    height: 100vh;
    background: rgba(255,255,255,0.89);
  }

  .child {
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	}
}

</style>
