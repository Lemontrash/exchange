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
        <template v-for="user in data">
          <tr @click="collapseUser(user.id)" class="user">
            <th>{{ user.firstName }} {{ user.lastName }}</th>
            <th>{{ user.created_at }}</th>
            <th>{{ user.mobile }}</th>
            <th>{{ user.email }}</th>
            <th class="text-center"><i class="fa fa-check-circle"></i></th>
            <th class="text-center">Individual</th>
          </tr>
          <tr v-if="opened.includes(user.id)">
            <td class="user-menu" colspan="5">
              <div class="files">
                <div class="item">
                  <div class="head">
                    ID Picture
                  </div>
                  <div class="sub-text">
                    Files Status
                  </div>
                  <app-switch v-model="user.approved.picture"/>
                  <button>
                    <i class="fa fa-copy"></i>
                    View Files
                    <i class="fa fa-angle-right"></i>
                  </button>
                </div>
              </div>
              <div class="transfer">

              </div>
            </td>
          </tr>
        </template>
      </tbody>
    </table>
  </main>
</template>

<script>
import AppSwitch from './../components/Switch.vue'
export default {
  data() {
    return {
      data: [],
      opened: [],
    };
  },
  component: {
    AppSwitch,
  },
  methods: {
    sync() {
      axios.get('/admin/new-users').then(res => {
        res.data = res.data.map(n => {
          n = n[0];
          n.approved = {
            picture: {
              id: 0,
              status: false,
            },
            selfie: {
              id: 0,
              status: false,
            },
            bank: {
              id: 0,
              status: false,
            },
            dod: {
              id: 0,
              status: false,
            },
          };
          return n;
        });
        this.data = res.data;
      })
    },
    collapseUser(id_user) {
      if(this.opened.includes(id_user)) {
        this.opened = this.opened.filter(n => n != id_user);
      } else {
        this.opened.push(id_user);
      }
    }
  },
  created() {
    this.sync();
  }
}
</script>

<style lang="scss" scoped>

table {
  .user {
    cursor: pointer;
  }
  .user-menu {
    .files {
      .item {
        button {
          color: #fff;
        }
      }
    }
    &:hover {
      color: unset;
    }
  }
}

</style>
