<template>
  <div>
      <span class="bg-blue-900 py-1 px-2 text-white absolute top-n-1 rounded text-sm inset-x-auto">
          <slot></slot>
      </span>
  </div>

</template>
<script>
export default {

}
</script>
<style scoped>
.top-n-1{
    top: -1em;
}
</style>
