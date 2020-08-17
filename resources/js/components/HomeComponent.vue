<template>
  <div class="home">
    <div class="main">
      <img src="" width="300" height="400">
      <div class="blurb">
        <p>I use the change of seasons, the shift in sunlight, flowers, and fall leaves, as individual elements to compose my pictures. Creating my own landscapes allows me to integrate the beauty of the natural world with my own inner spirit. My Paintings become my own natural history.</p>
        </div>
    </div>
  </div>
</template>

<script>

export default {
  data () {
    return {

    }
  },
  methods: {

  },
  created() {

  },
}
</script>

<style lang="scss" scoped>
  .home {
    background-color:#036;
    min-height:440px;
  }
  .main {
    display:flex;
    img { 
      margin-left:100px;
      margin-top:10px;
    }
    .blurb {
      margin-left:100px;
      margin-right:100px;
      font-size:23px;
      line-height:48px;
      color:#fff;
      align-self: center;
    }
  }
</style>
