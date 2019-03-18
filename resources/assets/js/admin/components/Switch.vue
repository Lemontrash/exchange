<template>
  <div class="switch">
    <button
      type="button"
      class="true"
      :class="{ selected: value === true }"
    >Yes</button>
    <button
      type="button"
      class="false"
      :class="{ selected: value === false }"
    >No</button>
  </div>
</template>

<script>
export default {
  props: {
    value: {
      type: Boolean,
      default: false,
    }
  },
  methods: {

  }
}
</script>

<style lang="scss" scoped>

.switch {
  background: rgba(255, 255, 255, 0.5);
  border-radius: 5px;
  width: 100px;
  button {
    float: left;
    width: 50%;
    height: 36px;
    border-radius: 5px;
    &.true.selected {
      background-image: linear-gradient(140deg, #009aff 0%, #007acc);
    }
    &.false.selected {
      background: #df0c48;
    }
  }
}

</style>
