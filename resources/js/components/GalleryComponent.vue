<template>
    <div class="container">
        <div class="sidebar">
            <span v-for="image in gallery" v-bind:key=image.id v-on:click ="switchImage(image.id)">
                <img v-bind:src="image.image" v-bind:alt="image.title" width="150">
            </span>   
        </div>
        <div class="image">
            <img v-bind:src="img.image">
            <p class="title">{{img.title}}</p>
        </div>
    </div>
</template>

<script>
export default {
  data () {
    return {
       gallery: [],
       image: {
           id: '',
           image: '',
           title: '',
           width: '',
           height: ''
       }, 
       img: {},
       pagination: {},
    }
  },
  methods: {
      fetchGallery() {
          fetch('api/galleries')
          .then(res => res.json())
          .then (res => {
            this.gallery = res.data;
            this.img = this.gallery[0];
          });
      },
      switchImage(id) {
          fetch('api/galleries/'+id)
          .then(res => res.json())
          .then(res=> {
              this.img = res.data;
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
        background-color:#036;
        padding-top:25px;
    }
    h1 {
        color:#5f00f5;
        flex-basis:100%;
        }
    .sidebar {
        display:flex;
        width:200px;
        flex-wrap: wrap;
        margin-left:25px;
    }
    .image {
        width:680px;
        .title {
            text-align: center;
            color:#fff;
            font-size:1em;
            font-weight:bold;
        }
    }
</style>
