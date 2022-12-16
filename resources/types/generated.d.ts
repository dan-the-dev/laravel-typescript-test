declare namespace App.Http.Controllers {
    export type Language = {
        name: string;
    };
    export type TestTypescript = {
        string: string;
        int: number;
        float: number;
        language: App.Http.Controllers.Language;
    };
}
