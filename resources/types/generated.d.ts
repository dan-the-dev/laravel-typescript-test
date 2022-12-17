declare namespace App.Custom {
    export type Language = {
        name: string;
        value: string;
    };
}
declare namespace App.Http.Controllers.Test {
    export type TestFormRequest = {
        string: string;
        int: number;
        float: number;
        language: App.Custom.Language;
    };
    export type TestRequest = {
        string: string;
        int: number;
        float: number;
        language: App.Custom.Language;
    };
    export type TestResponse = {
        string: string;
        int: number;
        float: number;
        language: App.Custom.Language;
        headers: any;
        original: any;
        exception: any | null;
    };
}
