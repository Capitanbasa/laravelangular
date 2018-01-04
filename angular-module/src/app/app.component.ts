import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { User } from './UserModel';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';
  user:User;

  constructor (private _http : HttpClient ){

  }

  ngOnInit(){
    this._http.get<User>('http://localhost:8000/auth').subscribe((data) => {
      this.user = data;
      console.log(data);
    });

  }
}
