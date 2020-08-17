<template>
  <div class="header">
      <h1>Stephanie Templin<span>Paintings and Drawings</span></h1>
      <div class="nav">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#shows">Shows</a></li>
        </ul>
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

<style lang="scss">
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');    

* {
  margin:0;
  padding:0;
}
body {
  font-family: 'Comfortaa', sans-serif;
  background-color:#369;
}
.header {
  background-color:#369;
  height:150px;
}
  h1 {
    color:#099;
    font-size:60px;
    padding:5px 10px 10px 10px;
    span {
      font-size:28px;
      margin-left:40px;
    }
  }
  .nav {
    border-top:2px solid #000;
    border-bottom:2px solid #000;
    background-color:#099;
    ul {
      list-style:none;
      margin-left:150px;
      color:#000;
      font-size:14px;
      li {
        display:inline-block;
        line-height:40px;
        width:110px;
        a {
          color:#000;
          text-decoration: none;
        }
        a:hover {
          color:#fff;
        }
      }
    }
  }
</style>
