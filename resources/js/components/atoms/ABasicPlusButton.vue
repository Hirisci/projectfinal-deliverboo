 <template>
  <button class="basic-plus-button">
    {{buttonText}} 
    <div class="button-plus"> + </div>
  </button>
 </template>
 
 <script>

 export default {
     name: 'ABasicPlusButton',
     props: {
      buttonText: String,
     }
 }
 </script>
 
 <style lang="scss" scoped>
  .basic-plus-button{
    background-color: var(--primary-purple);
    border-radius: 20px;
    padding: 10px;
    display: flex;
    justify-content: center;
    gap: 5px;
    &:hover{
      cursor: pointer;
    }
    .button-plus{
      background-color: white;
      color: var(--primary-purple);
      color: violet;
      width: 100%;
      height: 100%;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  }
 </style>