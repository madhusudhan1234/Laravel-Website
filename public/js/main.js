function NewsController($scope,$http){
    $http.get('/news_json').success(function(news_json){
        $scope.news = news_json;
    });
}

function StudentMessageController($scope,$http){
    $http.get('/studentMessage_json').success(function(StudentMessage){
        $scope.StudentMessage = StudentMessage;
    });
}