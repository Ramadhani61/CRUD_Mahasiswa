<template>
  <div class="customer-form">
    <form @submit.prevent="submit">
      <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" v-model="customer.name" class="form-control" placeholder="Masukan nama">
      </div>
      <div class="form-group">
        <label for="email">Nilai</label>
        <input type="text" v-model="customer.nilai" class="form-control" placeholder="Masukan nilai">
      </div>
      <div class="form-group">
        <label for="address">Indeks</label>
        <input type="text" v-model="customer.indeks" class="form-control" 
          placeholder="Masukan Indeks">
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample">
        Cancel
        </button>
    </form>
  </div>
</template>

<script>
  export default {
    name: 'customer-form', 
    data(){
      return {
        customer: {
          name: '',
          nilai: '',
          indeks: '',
        }
      }
    },
    methods: {
      submit() {
        this.$emit('add-customer', this.customer)
        this.customer = {
          name: '',
          nilai: '',
          indeks: '',
        }
      },
    },
  }
</script>