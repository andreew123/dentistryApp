<template>
    <div class="container">
        
      <div class="card mt-3" style="width: 60%;">
        <h5 class="card-header">Kereső</h5>
        <div class="card-body">
        <form>
          <div class="form-group">
            <label for="startDate">Kezdő időpont</label>
            <input type="date" class="form-control" 
              v-model="date_from" id="startDate" placeholder="2019-01-01">
          </div>
          <div class="form-group">
            <label for="endDate">Password</label>
            <input type="date" class="form-control" 
              v-model="date_to" id="endDate" placeholder="2019-01-05">
          </div>
          <button type="button" v-on:click="getBusinessHours()" class="btn btn-primary">Küldés</button>
        </form>
        </div>
      </div>

      <div class="card mt-3" style="width: 80%;" v-if="data">
        <h5 class="card-header">Rendelések</h5>
        <div class="card-body">
          <ul v-for="(item, index) in data" :key="index">
            <li>
              {{ item.date_from }}-től 
                <p class="d-inline" v-if="item.date_to">{{ item.date_to }}-ig</p> 
              minden {{ item.frequency.name }} héten 
              {{ item.day.name }} {{ item.opening }}-{{item.closing}} óráig
            </li>
          </ul>
        </div>
      </div>

    </div>
</template>

<script>
    export default {
        mounted() {},

        data() {
          return {
            date_from: '2019-01-01', 
            date_to: '2019-10-01',
            data: null
          }
        },

        methods: {
          getBusinessHours() {
            let params = {};
            if (this.date_from) params.date_from = this.date_from;
            if (this.date_to) params.date_to = this.date_to;

            axios.get('api/business_hours', {
              params: params
            })
            .then((response) => {
              this.data = response.data;
            })
            .catch((error) => {
              console.log('error', error);
            });
          }
        }
    }
</script>
