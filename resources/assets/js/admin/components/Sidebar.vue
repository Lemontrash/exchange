<template>
  <aside class="profile-nav">
    <ul class="links-container">
      <li class="link-item">
        <a href="">
          <i class="fa fa-check-circle"></i>
          <span>New Users</span>
        </a>
      </li>
      <li class="link-item">
        <a href="">
          <i class="fa fa-check-circle"></i>
          <span>Accepted Users</span>
        </a>
      </li>
    </ul>
  </aside>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>

aside {
  height: 100%;
  top: 0;
  left: 0;
  .link-item {
    height: 80px;
    font-size: 14px;
    vertical-align: middle;
    padding: 0;
    a {
      display: flex;
      width: 100%;
      height: 100%;
      flex-direction: row;
      justify-content: flex-start;
      align-items: center;
      padding: 30px;
      color: rgba(255, 255, 255, 0.5);
      &:hover {
        span {
          color: #fff;
          font-size: 16px;
          font-weight: bold;
        }
      }
    }
    i {
      color: #009aff;
      width: 20px;
    }

  }
}

</style>
