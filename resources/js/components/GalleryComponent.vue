<template>
    <div class="container">
        <h1>Gallery</h1>
        <div class="sidebar">
            <span v-for="image in gallery" v-bind:key=image.id>
            <img v-bind:src="image.image" v-bind:alt="image.title" width="150">
            </span>   
        </div>
        <div class="image"></div>
    </div>
</template>

<script>
export default {
  data () {
    return {
       gallery: [],
       image: {
           id: '',
           title: '',
           width: '',
           height: ''
       }, 
       pagination: {},
    }
  },
  methods: {
      fetchGallery() {
          fetch('api/galleries')
          .then(res => res.json())
          .then (res => {
            this.gallery = res.data;
          });
      }
  },
  created() {
      this.fetchGallery();
  },
}
</script>

<style lang="scss" scoped>
    .container {
        display:flex;
        flex-wrap:wrap;
    }
    h1 {
        color:#5f00f5;
        flex-basis:100%;
        }
    .sidebar {
        display:flex;
        width:200px;
        flex-wrap: wrap;
    }
    .image {
        width:680px;
        border:1px solid #000;
    }
</style>
