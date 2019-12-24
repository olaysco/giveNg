<template>
      <div>
          <div class="overlay">
              <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="#">[_______]</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        </ul>
                    </div>
                </nav>
          </div>
        <div class="ocean">
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
        <vue-pageable :options="options">
            <div class="container-fluid"  data-anchor="page 1">
                <div class="row page-row">
                    <div class="col d-flex align-items-center text-white flex-column content">
                        <h5 class="subtext">Giving to help the world</h5>
                        <h1 class="maintext">Give and it shall be given unto you</h1>
                        <!-- <button class="btn btn-primary">
                            Give Now
                        </button> -->
                    </div>
                </div>
            </div>
            <div class="container-fluid" data-anchor="page 2">
                <div class="row page-row">
                    <div class="col d-flex align-items-center text-white flex-column content">
                        <h5 class="subtext">As you give</h5>
                        <h1 class="maintext">For what you give shall be returned unto you in good measures</h1>
                        <!-- <button class="btn btn-primary">
                            Give Now
                        </button> -->
                    </div>
                </div>
            </div>

        </vue-pageable>
  </div>
</template>
<script>

export default {
    name: "MainApp",
    data() {
        return {
            options: {
                animation: 500,
                delay: 400,
                orientation: "horizontal",
            },
      }
    },
    created(){
    }
}
</script>
<style scoped>

</style>
