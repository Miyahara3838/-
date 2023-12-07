function deletePost(id){
    if(confirm('削除すると復元できません。\n本当に削除しますか？')){
        document.getElementById(`form_${id}`).submit();
    }
}
