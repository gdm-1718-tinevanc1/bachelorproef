import { Component, OnInit } from '@angular/core';
import { INews } from './shared/models/inews';
import { ITypeNews } from './shared/models/itypenews';
import { NewsService } from './shared/service/news.service';

@Component({
  selector: 'app-news',
  templateUrl: './news.component.html',
  styleUrls: ['./news.component.scss']
})
export class NewsComponent implements OnInit {
  news: Array<INews>
  types: Array<ITypeNews>
  constructor(private newsService: NewsService) { }

  ngOnInit() {
    this.newsService.getNewsTypes().subscribe(
      result => { this.types = result},
      err => console.log('err')
    )

    this.getAllNews();
  }

  getAllNews(){
    this.newsService.getNews().subscribe(
      result => { this.news = result, console.log(this.news)},
      err => console.log('err')
    )
  }

  getNewsByType(type){
    if(type == 'all'){
      this.getAllNews();
    } else{
      this.newsService.getNewsByType(type).subscribe(
        data => {
          this.news = data
          console.log(this.news)
        });
    }
  }
}
