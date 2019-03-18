<template>
  <main>
    <div class="page-title">ADMIN PANEL</div>

    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Registration Date</th>
          <th>Phone</th>
          <th class="text-center">Email</th>
          <th class="text-center">Aproved</th>
          <th class="text-center">Account</th>
        </tr>
      </thead>
      <tbody>
        <tr class="user">
          <th>John Snow</th>
          <th>02 / 02 /2019</th>
          <th>+380557744876</th>
          <th>Johnsnow14@gmail.com</th>
          <th class="text-center"><i class="fas fa-check-circle"></i></th>
          <th class="text-center">Individual</th>
        </tr>
      </tbody>
    </table>
  </main>
</template>

<script>
export default {
  methods: {
    sync() {
      axios.get('/admin/new-users').then(res => {
        console.log(res.data);
      })
    }
  },
  created() {
    this.sync();
  }
}
</script>

<style lang="scss" scoped>
</style>
