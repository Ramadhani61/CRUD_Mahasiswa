<template>
  <div id="app">

    <div class="container">
      <!-- <h1 class="mb-4">Data Nilai Mahasiswa Mata Kuliah Algoritma Struktur Data</h1> -->
      <hr>
      <p> 
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Tambah Data
        </button>
      &nbsp; &nbsp;
        
      </p>
      

      <customer-table 
        v-bind:customers='customers' 
        @edit-customer="editCustomer"
        @delete-customer="deleteCustomer"
      />

      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <h2>Input Data Nilai Mahasiswa</h2>
          <hr>

          <!-- <customer-form @add-customer="addCustomer"/> -->
          <customer-form @add-customer="addCustomer"/>

        </div>
      </div>
    </div>
  </div>
</template>


<script>
import axios from 'axios';
import CustomerTable from '@/components/CustomerTable.vue'
import CustomerForm from '@/components/CustomerForm.vue'

export default {
  name: 'App',
  components: {
    CustomerTable,
    CustomerForm, 
  },
  data() {
    return {
      customers: []
        // {
        //   id: 1,
        //   name: 'Bambang',
        //   nilai: '85',
        //   indeks: 'A',
        // },
        // {
        //   id: 2,
        //   name: 'Dika',
        //   nilai: '75',
        //   indeks: 'B',
        // },
        // {
        //   id: 3,
        //   name: 'Agus',
        //   nilai: '92',
        //   indeks: 'A',
        // },
        // {
        //   id: 4,
        //   name: 'Nolep',
        //   nilai: '92',
        //   indeks: 'A',
        // },
        //],
    }
  },
  created() {
    axios.get(`http://localhost:8000/api/customers`)
      .then(response => {
        this.customers = response.data.data
      })
  },
  methods: {
    addCustomer(customer) {
      // this.customers.push(customer);
      axios.post('http://localhost:8000/api/customers', customer)
        .then(response => {
          console.log(response);
          this.customers = [...this.customers, response.data.data]
      })
    },
    editCustomer(id, data) {
      // this.customers = this.customers.map(function (customer) { 
      //   return customer.id === id ? data : customer;
      // });
      axios.put(`http://localhost:8000/api/customers/${id}`, data)
        .then(response => {
        console.log(response.data.data);
        this.customers = this.customers.map(customer => (customer.id === id ? data : customer))
    })
    },
    deleteCustomer(id) {
      // this.customers = this.customers.filter(function (customer) { 
      //   return customer.id !== id;
      // });
      axios.delete(`http://localhost:8000/api/customers/${id}`)
      .then(() => {
        const customerId = this.customers.indexOf(id)
        this.customers.splice(customerId, 1)
      });
    }
  }
}
</script>

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
