<template>
<div class="customer-table">
  <table class="table table-bordered">
  <thead class="thead-dark">
    <tr> 
      <th scope="col">Nama</th>
      <th scope="col">Nilai</th>  
      <th scope="col">Indeks</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody> 
    <tr v-for="customer in customers" :key="customer.id">
    <template v-if="customerId === customer.id">
      <td>
        <!-- <label for="name" class="font-weight-bold">Nama:</label> -->
        <div> 
          <input type="text" v-model="customer.name" class="form-control" />
        </div>
      </td>
      <td>
        <!-- <label for="email" class="font-weight-bold">Nilai:</label> -->
        <div> 
          <input type="text" v-model="customer.nilai" class="form-control" />
        </div>
      </td>
      <td>
        <!-- <label for="address" class="font-weight-bold">Indeks:</label> -->
        <div> 
          <input type="text" v-model="customer.indeks" class="form-control"  />
        </div>
      </td>
      <td> 
        <div class="text-center">
        <button class="btn btn-success m-2" @click="saveEdit(customer)">Save</button>
        <button class="btn btn-danger" @click="cancelEdit(customer)" >Cancel</button>
        </div>
      </td>
    </template>
    <template v-else>
      <td>{{customer.name}}</td>
      <td>{{customer.nilai}}</td>
      <td>{{customer.indeks}}</td>
      <td>
        <div class="text-center">
         <button class="btn btn-primary mr-2" @click="editCustomer(customer)">Edit</button>
         <button class="btn btn-danger" @click="deleteCustomer(customer.id)">Hapus</button> 
        </div>
      </td>
    </template>
  </tr>
  </tbody>
</table>
</div>
</template>

<script>
 

  export default {
    name: 'customer-table', 
    props: {
      customers: Array,
    },
    data() {
      return {
          customerId: null,
        }
      },
      methods: {
        editCustomer(customer) { 
          this.data = Object.assign({}, customer)
          this.customerId = customer.id 
          // console.log(this.data);
        },
        saveEdit(customer) { 
          let id = this.data.id
          this.$emit('edit-customer', id, customer)  
          this.customerId = null
        },
        cancelEdit(customer) { 
          Object.assign(customer, this.data)
          this.customerId = null;
          // console.log(this.customerId);
        },
        deleteCustomer(id){
          this.$emit('delete-customer', id)  
        }
      }
  }
</script>

<style scoped> 
</style> 