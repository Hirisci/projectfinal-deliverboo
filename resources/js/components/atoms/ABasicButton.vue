 <template>
  <button class="basic-button"> {{buttonText}} </button>
 </template>
 
 <script>

 export default {
     name: 'ABasicButton',
     props: {
      buttonText: String,
     }
 }
 </script>
 
 <style lang="scss" scoped>
  .basic-button{
    color: white;
    text-transform: uppercase;
    background-color: var(--primary-purple);
    border-radius: 1.25rem;
    padding: .625rem;
    display: flex;
    justify-content: center;
    transition: background-color ease-in-out .3s;
    &:hover{
      cursor: pointer;
      background-color: purple;
    }
  }
 </style>