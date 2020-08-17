<template>
  <div class="shows">
      <h2>My Upcoming Shows</h2>
        <div v-for="show in shows" v-bind:key=show.id>
          <h3>{{show.title}}</h3>
          <p>{{show.address}}</p>
          <p>{{show.city}}, {{show.state}}  {{show.zip}}</p>
          <p>{{show.phone}}</p>
        </div>      
  </div>
</template>

<script>

export default {
  data () {
    return {
      shows: [],
      show: {
        id: '',
        title: '',
        address: '',
        city: '',
        state: '',
        zip: '',
        start: '',
        end: '',
        phone: ''
      }
    }
  },
  methods: {
      fetchShows() {
          fetch('api/shows')
          .then(res => res.json())
          .then (res => {
            this.shows = res.data;
          });
      }
  },
  created() {
      this.fetchShows();
  },
}
</script>

<style lang="scss" scoped>
  .shows {
    margin-left:100px;
    margin-top:25px;
    color:#fff;
    margin-bottom:50px;
    h2 {
      color:#099;
      font-size:36px;
      margin-bottom:15px;
    }
    h3 {
      font-size:24px;
      margin-bottom:15px;
    }
    p {
      font-size:20px;
      line-height:34px;
    }
  }
</style>
