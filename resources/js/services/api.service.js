import axios from "axios";
const url_base="http://127.0.0.1:8000";
export function Api() {
    let token = localStorage.getItem('access_token');
    const api = axios.create(
        {
            baseURL: url_base,
            headers: {
                'Accept': 'application/json',
                "Content-Type": 'application/json',
                'Authorization': 'Bearer ' + token,
            }
        }
    );
    return api;
}

