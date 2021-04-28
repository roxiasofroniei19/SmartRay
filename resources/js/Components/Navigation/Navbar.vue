<template>
    <div class="navbar">
    <div class="navbar-logo">
        <img src="../../../../storage/app/public/img/logo.png" alt="Logo">
    </div>
    <div class="navbar-menu">
        <ul>
            <li class="active"><a :href="route('welcome')">Home</a></li>
            <li><a :href="route('about')">About</a></li>
            <li><a :href="route('pricing')">Pricing</a></li>
            <li><a :href="route('login')">Login</a></li>

        </ul>
        
    </div>
</div>
</template>

<script>
export default {
    
}
</script>

<style scoped lang="scss">
@import '../../../css/_variables.scss';

.navbar {
  display: flex;
  background-color: $primary-color-light;
  max-height: 7%;
  min-height: 58px;
}

.navbar-logo {
  width: 30%;
  padding-left: 20px;
  display: flex;
  justify-content: flex-start;
  align-items: center;

  img {
    max-height: 80%;
    max-width: auto;
  }
}

.navbar-menu {
  max-height: 100%;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  flex: 2 0 0;
  padding-right: 1em;

  ul > li {
    float: left;
    list-style-type: none;
    margin: 0 0.8em;
    font-family: RubikRegular;
    font-size: 1.3em;

    a {
      text-decoration: none;
      color: rgb(119, 119, 119);
      transition: all 0.5s ease;

      &:hover {
        color: $accent-color !important;
      }
    }
  }

  ul {
    padding: 0;
  }
}

.active {
  a {
    color: $accent-color !important;
  }
}

.navbar-sidebar-button {
  border: 1px solid $accent-color;
  border-radius: 15px;
  padding: 0.5em;
  width: 1.7em;
  height: 1.7em;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;

  background: $primary-color-light;
  background-size: 2em 2em;
  background-position: 0 15px;

  transition: all 0.4s ease;

  i {
    font-size: 1.5em;
    color: $accent-color;
    transition: all 0.4s ease;
  }

  &:hover {
    background: $accent-color;
    color: white;

    i {
      color: white;
    }
  }
}

// Large devices (desktops, less than 1200px)
@media (max-width: 1199.98px) {
}

// Medium devices (tablets, less than 992px)
@media (max-width: 991.98px) {
}

// Small devices (landscape phones, less than 768px)
@media (max-width: 767.98px) {
}

@media (max-width: 575.98px) {
  .navbar-logo {
    width: 20%;
    display: flex;
    justify-content: center;
    align-items: center;

    img {
      max-height: 40%;
      margin-left: 20px;
    }
  }

  .navbar-menu {
    ul > li {
      margin: 0 0.3em;
      font-size: 1em;
    }
  }

  .navbar-sidebar-button {
    border-radius: 10px;
    width: 1em;
    height: 1em;
    margin-left: 0.3em;

    i {
      font-size: 1em;
    }
  }
}

</style>