<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Document Language Lines
    |--------------------------------------------------------------------------
    */

    'title' => 'Dokumenti',
    'title_client' => 'Historija narudžbi',

    'data' => [
        'id' => 'Broj',
        'type_id' => 'Tip',
        'created_by' => 'Vlasnik',
        'client_id' => 'Klijent',
        'buyer_data' => 'Podaci o kupcu',
        'shipping_data' => 'Podaci o dostavi',
        'status' => 'Status',
        'internal_status' => 'Interni status',
        'printing' => 'Štampanje',
        'payment_type' => 'Način plaćanja',
        'payment_period' => 'Period plaćanja',
        'delivery_type' => 'Tip dostave',
        'delivery_cost' => 'Cijena dostave',
        'delivery_date' => 'Datum obrade',
        'subtotal' => 'Iznos',
        'total' => 'Ukupno',
        'date' => 'Datum',
        'date_of_order' => 'Datum dokumenta',
        'date_of_delivery' => 'Datum dostave',
        'date_of_payment' => 'Datum plaćanja',
        'product' => 'Proizvod',
        'products' => 'Proizvodi',
        'item' => 'Stavka',
        'quantity' => 'Kol.',
        'discount' => 'Rabat',
        'discount1' => 'Rab. 1',
        'discount2' => 'Rab. 2',
        'discount_num' => 'Rabat #:num (:discount%)',
        'subtotal_no_vat' => 'Ukupno bez PDV-a',
        'subtotal_with_discount' => 'Ukupno sa rabatom',
        'total_discount' => 'Ukupan rabat',
        'total_no_vat' => 'Osnovica za PDV',
        'vat' => 'PDV (:vat%)',
        'total_with_vat' => 'Ukupno sa PDV-om',
        'delivery' => 'Isporuka',
        'unit_id' => 'Jed. mjere',
        'vpc' => 'VPC cijena',
        'vpc_discounted' => 'Neto',
        'mpc' => 'MPC cijena',
        'changes' => 'Promjene',
        'note' => 'Napomena',
        'payment_discount' => 'Rabat 1',
        'discount_value1' => 'Rabat 2',
        'package_number' => 'Broj paketa / koleta',
        'package_number_short' => 'Br. pak./kol.',
        'weight' => 'Kilaža',
        'loyalty' => 'Loyalty',
        'discount_contract' => 'Ug. Rab.',
        'show_price' => 'Cijena',
        'show_value' => 'Iznos',
        'show_discount' => 'Rabat',
        'show_net' => 'Prod. cijena',
        'show_gratis' => 'Sa gratisom (:percent%)',
        'show_net_tax' => 'Fakt. cijena',
        'show_total' => 'Fakt. vrijednost',
        'picked_at' => 'Preuzeto',
        'delivered_at' => 'Dostavljeno',
        'express_post_type' => 'Brza pošta',
        'processed_at' => 'Procesirani',
        'qty' => 'Količina',
        'document_id' => 'Dokument',
        'stock_id' => 'Skladište',
        'sync_status' => 'Sinhronizacija',
    ],

    'actions' => [
        // 'create' => 'Kreiraj dokument',
        'edit' => 'Izmjeni dokument',
        'open' => 'Otvori dokument',
        'close' => 'Zatvori dokument',
        'close_short' => 'Zatvori',
        'choose' => 'Izaberi dokument',
        'show' => 'Pregledaj dokument',
        'destroy' => 'Obriši dokument',
        'copy' => 'Kopiraj dokument',
        'return' => 'Storniraj dokument',
        'cancel' => 'Otkaži dokument',
        'print_all' => 'Štampaj',
        'invoice' => 'Faktura',
        'receipt' => 'Fiskalni',
        'create' => [
            'preorder' => 'Kreiraj prednarudžbu',
            'order' => 'Kreiraj narudžbu',
            'offer' => 'Kreiraj predračun',
            'cash' => 'Kreiraj gotovinu MP',
            'return' => 'Kreiraj povrat',
            // 'void' => 'Storniraj',
            // 'invoice' => 'Faktura'
        ],
        'new' => [
            'preorder' => 'Nova prednarudžba',
            'order' => 'Nova narudžba',
            'offer' => 'Novi predračun',
            'cash' => 'Nova gotovina MP',
            'return' => 'Novi povrat',
        ],
        'complete' => [
            'preorder' => 'Prebaci u narudžbu',
            'order' => 'Završi narudžbu',
            'offer' => 'Završi predračun',
            'cash' => 'Završi gotovinu MP',
            'return' => 'Završi povrat',
        ],
        'last' => [
            'preorder' => 'Zadnje prednarudžbe',
            'order' => 'Zadnje narudžbe',
            'offer' => 'Zadnji predračun',
            'cash' => 'Zadnji gotovine MP',
            'return' => 'Zadnji povrati',
        ],
        'status_to' => [
            'canceled' => 'Otkaži dokument',
            'in_warehouse' => 'Odobri za skladište',
            'warehouse_preparing' => 'Spremanje',
            'for_invoicing' => 'Spremno za isporuku',
            'invoiced' => 'Fakturisano',
            'completed' => 'Završi dokument',
            'express_post' => 'Za brzu poštu',
            'express_post_canceled' => 'Otkaži brzu poštu',
            'shipped' => 'Otpremi',
            'delivered' => 'Dostavljeno',
            'returned' => 'Vraćeno',
            'retrieved' => 'Preuzeto',
        ],
        'add' => [
            'product' => 'Dodaj proizvod',
        ],
        'choose_client' => 'Odaberi klijenta',
    ],

    'notifications' => [
        'created' => 'Novi dokument je uspješno kreiran.',
        'updated' => 'Informacije o dokument su uspješno ažurirane.',
        'deleted' => 'Dokument je uspješno obrisan.',
        'closed' => 'Dokument su uspješno zatvoren.',
        'opened' => 'Dokument su uspješno otvoren.',
        'opened_other' => 'Korisnik :person trenutno radi na dokumentu.',
        'completed' => 'Dokument je uspješno kompletiran.',
        'status' => 'Dokumenti su uspješno prebačeni - :status.',
        'changed' => 'Informacije su uspješno ažurirane.',
        'added' => 'Proizvod je uspješno dodan.',
    ],

    'errors' => [
        'has_scoped' => ':type #:id dokument je otvoren!',
        'not_found' => 'Dokument #:id nije pronađen!',
        'scoped' => [
            'not_found' => 'Dokument nije pronađen!',
            'no_items' => 'Dokument nema proizvoda!',
            'not_preorder' => 'Dokument mora biti prednarudžba!',
        ],
    ],

    'changes' => [
        'quantity' => 'Količina',
    ],

    'emails' => [
        'tracking' => [
            'title' => 'Kod za praćenje',
            'message' => 'Poštovani <strong >:user_to_name</strong >,<br /><br />status narudžbe <strong >:document_number</strong> možete pratiti preko sljedećeg linka:',
            'button' => 'Prati narudžbu',
        ],
    ],
];