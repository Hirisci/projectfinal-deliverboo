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
    background-color: var(--primary-purple);
    border-radius: 20px;
    padding: 10px;
    display: flex;
    justify-content: center;
    &:hover{
      cursor: pointer;
    }
  }
 </style>