<template>
  <table>
    <thead>
      <tr>
        <th colspan="2">Onigiri Menu</th>
      </tr>
    </thead>
    <tbody>
    <tbody>
      <tr>
        <div v-for="onigiri in onigiris" :key="id">
          <td>{{ onigiri.name }}</td>
          <td>{{ onigiri.price }}</td>
        </div>
      </tr>
    </tbody>

    </tbody>
  </table>

</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      onigiris: [],
    }
  },
  mounted() {
    axios
      .get('/api/onigiris/')
      .then(response => (this.onigiris = response.data))
  }
}
</script>
