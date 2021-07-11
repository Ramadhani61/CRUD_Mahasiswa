<template>
  <div id="app">
    <div class="container">
      <h1 class="mb-4">Data Nilai Mahasiswa Mata Kuliah Algoritma Struktur Data</h1>
      <hr>
      <p> 
        <button class="btn btn-primary" type="button">
        <router-link to="/" style="color: #ffffff">Home</router-link>
        </button>
      &nbsp; &nbsp;
        
        <button class="btn btn-primary" type="button">
        <router-link to="/chartview" style="color: #ffffff">View Chart</router-link>
        </button>
      </p>
    </div>
    <router-view></router-view>
  </div>
</template>

<style scoped>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: left;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

