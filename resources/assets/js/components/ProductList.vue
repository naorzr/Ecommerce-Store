<template>
  <div>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-9">
          <div class="row">
            <div id="product" v-for="(item,index) in items.slice(fromitem,toitem)" :key="index" class="col-lg-4 col-md-6 mb-4">
              <product :id="item.id" :imagePath="item.imagePath" :title="item.title" :price="item.price" :description="item.description"  />
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-lg-4"></div>
        <div class="col"><button class="btn btn-secondary" v-on:click="updatePage(-1)">Prev</button>
        <button id="display-btn" class="btn btn-secondary no-click">Page {{currentpage}} out of {{totalpages}}</button>
        <button class="btn btn-secondary" v-on:click="updatePage(1)">Next</button>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
import Product from "./Product.vue";
export default {
  data() {
    return {
      items: [],
      itemsToDisplay: 6,
      currentpage: 1,
      totalpages: 1,
      fromitem: 0,
      toitem: 6
    };
  },

  created() {
    this.fetchItems();
  },

  methods: {
    updatePage(updateby) {
      var pagenum = this.currentpage + updateby;
      if (pagenum >= 1 && pagenum <= this.totalpages) {
        this.currentpage = pagenum;
        this.updateItems();
      }
    },
    updateItems() {
      this.fromitem = (this.currentpage - 1) * this.itemsToDisplay;
      var toitem = this.currentpage * this.itemsToDisplay;
      if (toitem < this.items.length) {
        this.toitem = toitem;
      } else {
        this.toitem = this.items.length;
      }
    },
    fetchItems() {
      let uri = "/products";
      axios.get(uri).then(response => {
        this.items = response.data;
        this.totalpages = Math.ceil(response.data.length / 6);
        console.log(response.data);
      });
    }
  },
  components: {
    Product
  }
};
</script>

<style>
.no-click {
  pointer-events: none;
}
</style>
