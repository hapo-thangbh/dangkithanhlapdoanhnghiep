<template>
    <div>
        <!-- stacked="md" -->
        <b-table
            show-empty
            :items="items"
            :fields="fields"
            :current-page="currentPage"
            :per-page="perPage"
            responsive
            >

            <template #cell(status)="data">
                <b-badge variant="success" v-if="data.item.status == 1">Active</b-badge>
            </template>

            <template #cell(actions)="data">
                <button class="btn btn-sm btn-primary mr-1">
                    <i class="mdi mdi-pencil"></i>
                </button>
                <button class="btn btn-sm btn-danger" @click="destroy()">
                    <i class="mdi mdi-delete"></i>
                </button>
            </template>

            <!-- <template slot="[actions]">
                <button class="btn btn-primary mr-1">
                    <i class="mdi mdi-pencil"></i>
                </button>
                <button class="btn btn-primary">
                    <i class="mdi mdi-delete"></i>
                </button>
            </template> -->
        </b-table>

        <div class="row">
            <b-col md="12" sm="6" class="pull-right">
                <b-pagination
                v-model="currentPage"
                :total-rows="paginate()"
                :per-page="perPage"
                size="sm"
                class="my-0"
                ></b-pagination>
            </b-col>
        </div>
    </div>
    
    </div>
</template>

<script>
export default {
    props:{
        items: Array,
        fields: Array,
    },
    data() {
      return {
        totalRows: 1,
        currentPage: 1,
        perPage: 5,
        pageOptions: [5, 10, 15],
        sortBy: '',
        sortDesc: false,
        sortDirection: 'asc',
        filter: null,
        filterOn: [],
      }
    },
    computed: {
      sortOptions() {
        return this.fields
          .filter(f => f.sortable)
          .map(f => {
            return { text: f.label, value: f.key }
          })
      }
    },
    mounted() {
      this.totalRows = this.items.length
    },
    methods: {
        onFiltered(filteredItems) {
            this.totalRows = filteredItems.length
            this.currentPage = 1
        },
        paginate() {
            return (this.totalRows = this.items.length);
        },
        destroy(){
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.value) {
                    swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
                })
        }
    }
}
</script>