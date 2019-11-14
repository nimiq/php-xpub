<?php

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../src/XPub.php');

use Nimiq\XPub;

$vectors = [
    [
        'parent' => 'xpub68Gmy5EdvgibQVfPdqkBBCHxA5htiqg55crXYuXoQRKfDBFA1WEjWgP6LHhwBZeNK1VTsfTFUHCdrfp1bgwQ9xv5ski8PX9rL2dZXvgGDnw',
        'index' => 1,
        'child' => 'xpub6ASuArnXKPbfEwhqN6e3mwBcDTgzisQN1wXN9BJcM47sSikHjJf3UFHKkNAWbWMiGj7Wf5uMash7SyYq527Hqck2AxYysAA7xmALppuCkwQ',
        'address' => '1JQheacLPdM5ySCkrZkV66G2ApAXe1mqLj',
        'coin' => 'btc',
    ], [
        'parent' => 'xpub6D4BDPcP2GT577Vvch3R8wDkScZWzQzMMUm3PWbmWvVJrZwQY4VUNgqFJPMM3No2dFDFGTsxxpG5uJh7n7epu4trkrX7x7DogT5Uv6fcLW5',
        'index' => 2,
        'child' => 'xpub6FHa3pjLCk84BayeJxFW2SP4XRrFd1JYnxeLeU8EqN3vDfZmbqBqaGJAyiLjTAwm6ZLRQUMv1ZACTj37sR62cfN7fe5JnJ7dh8zL4fiyLHV',
        'address' => '1LjmJcdPnDHhNTUgrWyhLGnRDKxQjoxAgt',
        'coin' => 'btc',
    ], [
        'parent' => 'xpub6FHa3pjLCk84BayeJxFW2SP4XRrFd1JYnxeLeU8EqN3vDfZmbqBqaGJAyiLjTAwm6ZLRQUMv1ZACTj37sR62cfN7fe5JnJ7dh8zL4fiyLHV',
        'index' => 1000000000,
        'child' => 'xpub6H1LXWLaKsWFhvm6RVpEL9P4KfRZSW7abD2ttkWP3SSQvnyA8FSVqNTEcYFgJS2UaFcxupHiYkro49S8yGasTvXEYBVPamhGW6cFJodrTHy',
        'address' => '1LZiqrop2HGR4qrH1ULZPyBpU6AUP49Uam',
        'coin' => 'btc',
    ], [
        'parent' => 'xpub661MyMwAqRbcFW31YEwpkMuc5THy2PSt5bDMsktWQcFF8syAmRUapSCGu8ED9W6oDMSgv6Zz8idoc4a6mr8BDzTJY47LJhkJ8UB7WEGuduB',
        'index' => 0,
        'child' => 'xpub69H7F5d8KSRgmmdJg2KhpAK8SR3DjMwAdkxj3ZuxV27CprR9LgpeyGmXUbC6wb7ERfvrnKZjXoUmmDznezpbZb7ap6r1D3tgFxHmwMkQTPH',
        'address' => '19EuDJdgfRkwCmRzbzVBHZWQG9QNWhftbZ',
        'coin' => 'btc',
    ], [
        'parent' => 'xpub6ASAVgeehLbnwdqV6UKMHVzgqAG8Gr6riv3Fxxpj8ksbH9ebxaEyBLZ85ySDhKiLDBrQSARLq1uNRts8RuJiHjaDMBU4Zn9h8LZNnBC5y4a',
        'index' => 1,
        'child' => 'xpub6DF8uhdarytz3FWdA8TvFSvvAh8dP3283MY7p2V4SeE2wyWmG5mg5EwVvmdMVCQcoNJxGoWaU9DCWh89LojfZ537wTfunKau47EL2dhHKon',
        'address' => '1BxrAr2pHpeBheusmd6fHDP2tSLAUa3qsW',
        'coin' => 'btc',
    ], [
        'parent' => 'xpub6ERApfZwUNrhLCkDtcHTcxd75RbzS1ed54G1LkBUHQVHQKqhMkhgbmJbZRkrgZw4koxb5JaHWkY4ALHY2grBGRjaDMzQLcgJvLJuZZvRcEL',
        'index' => 2,
        'child' => 'xpub6FnCn6nSzZAw5Tw7cgR9bi15UV96gLZhjDstkXXxvCLsUXBGXPdSnLFbdpq8p9HmGsApME5hQTZ3emM2rnY5agb9rXpVGyy3bdW6EEgAtqt',
        'address' => '14UKfRV9ZPUp6ZC9PLhqbRtxdihW9em3xt',
        'coin' => 'btc',
    ], [
        'parent' => 'tpubD6NzVbkrYhZ4Ymi1bLuVeV7QxdAJaqjZgrmbKZkE4xyF7SVb5dXhB2KNevFFYB54fPueAfEXx9D88wCX6RaCwJqGUu3tKjGuD3oAPbhMVpG',
        'index' => [0, 0],
        'child' => null,
        'address' => 'myD4h7qQZgvBzNhaipxk4cfQfhB8ymaXLi',
        'coin' => 'btc',
    ], [
        'parent' => 'tpubD6NzVbkrYhZ4Ymi1bLuVeV7QxdAJaqjZgrmbKZkE4xyF7SVb5dXhB2KNevFFYB54fPueAfEXx9D88wCX6RaCwJqGUu3tKjGuD3oAPbhMVpG',
        'index' => [0, 1],
        'child' => null,
        'address' => 'n1tNSTgmSrGeS3XbiWrG4foY7eagVJKJgg',
        'coin' => 'btc',
    ], [
        'parent' => 'tpubD6NzVbkrYhZ4Ymi1bLuVeV7QxdAJaqjZgrmbKZkE4xyF7SVb5dXhB2KNevFFYB54fPueAfEXx9D88wCX6RaCwJqGUu3tKjGuD3oAPbhMVpG',
        'index' => [0, 2],
        'child' => null,
        'address' => 'mjRRCz4wTLX8pyUrwwuQqYd2f6XZyDeW6e',
        'coin' => 'btc',
    ], [
        'parent' => 'tpubD6NzVbkrYhZ4Ymi1bLuVeV7QxdAJaqjZgrmbKZkE4xyF7SVb5dXhB2KNevFFYB54fPueAfEXx9D88wCX6RaCwJqGUu3tKjGuD3oAPbhMVpG',
        'index' => [0, 3],
        'child' => null,
        'address' => 'mg6NRCZULcYUNdpd15ZUm6ipWARVF1QSzq',
        'coin' => 'btc',
    ], [
        'parent' => 'tpubD6NzVbkrYhZ4Ymi1bLuVeV7QxdAJaqjZgrmbKZkE4xyF7SVb5dXhB2KNevFFYB54fPueAfEXx9D88wCX6RaCwJqGUu3tKjGuD3oAPbhMVpG',
        'index' => [0, 4],
        'child' => null,
        'address' => 'mx3dAxtAGzSYbYzVbRP5Y2Hi7W5KGKyhav',
        'coin' => 'btc',
    ], [
        'parent' => 'tpubD6NzVbkrYhZ4Ymi1bLuVeV7QxdAJaqjZgrmbKZkE4xyF7SVb5dXhB2KNevFFYB54fPueAfEXx9D88wCX6RaCwJqGUu3tKjGuD3oAPbhMVpG',
        'index' => [0, 5],
        'child' => null,
        'address' => 'mvxzuevzQGHLuD37WW8AYafj15ePw7yxpL',
        'coin' => 'btc',
    ], [
        'parent' => 'xpub6CC4r6jLdZSXWTMXjDC8zdQ9AhWowFf7bsyXNAaGbpSvVtwwXgZPuEhGqDURcCdTXBSNC3ZJv23FmhNGvES7nrNK5QfDDnRd8exT9usce2s',
        'index' => [0, 0],
        'child' => null,
        'address' => '0xB3a30E4631097BA14E8998aD256A36069fb091E3',
        'coin' => 'eth',
    ], [
        'parent' => 'xpub6CC4r6jLdZSXWTMXjDC8zdQ9AhWowFf7bsyXNAaGbpSvVtwwXgZPuEhGqDURcCdTXBSNC3ZJv23FmhNGvES7nrNK5QfDDnRd8exT9usce2s',
        'index' => [0, 1],
        'child' => null,
        'address' => '0x3126c8ae7AF5D541f0e0b616fe692D95D343e9d7',
        'coin' => 'eth',
    ], [
        'parent' => 'xpub6CC4r6jLdZSXWTMXjDC8zdQ9AhWowFf7bsyXNAaGbpSvVtwwXgZPuEhGqDURcCdTXBSNC3ZJv23FmhNGvES7nrNK5QfDDnRd8exT9usce2s',
        'index' => [0, 2],
        'child' => null,
        'address' => '0x17D26a6BA7a0099e5e6d031248410b397780C047',
        'coin' => 'eth',
    ], [
        'parent' => 'xpub6CC4r6jLdZSXWTMXjDC8zdQ9AhWowFf7bsyXNAaGbpSvVtwwXgZPuEhGqDURcCdTXBSNC3ZJv23FmhNGvES7nrNK5QfDDnRd8exT9usce2s',
        'index' => [0, 3],
        'child' => null,
        'address' => '0xd338459525C6bd85489b677d55b12e7821e0172d',
        'coin' => 'eth',
    ], [
        'parent' => 'xpub6CC4r6jLdZSXWTMXjDC8zdQ9AhWowFf7bsyXNAaGbpSvVtwwXgZPuEhGqDURcCdTXBSNC3ZJv23FmhNGvES7nrNK5QfDDnRd8exT9usce2s',
        'index' => [0, 4],
        'child' => null,
        'address' => '0x7f65930f50E2F29405454160756c6F98EF3B8E7a',
        'coin' => 'eth',
    ], [
        'parent' => 'xpub6CC4r6jLdZSXWTMXjDC8zdQ9AhWowFf7bsyXNAaGbpSvVtwwXgZPuEhGqDURcCdTXBSNC3ZJv23FmhNGvES7nrNK5QfDDnRd8exT9usce2s',
        'index' => [0, 5],
        'child' => null,
        'address' => '0xe11f15608e043d0fF31105bFC9861079Fb3A67d4',
        'coin' => 'eth',
    ], [
        'parent' => 'xpub6BosfCnifzxcFwrSzQiqu2DBVTshkCXacvNsWGYJVVhhawA7d4R5WSWGFNbi8Aw6ZRc1brxMyWMzG3DSSSSoekkudhUd9yLb6qx39T9nMdj',
        'index' => [0, 0],
        'child' => null,
        'address' => '1LqBGSKuX5yYUonjxT5qGfpUsXKYYWeabA',
        'coin' => 'btc',
    ], [
        'parent' => 'zpub6rFR7y4Q2AijBEqTUquhVz398htDFrtymD9xYYfG1m4wAcvPhXNfE3EfH1r1ADqtfSdVCToUG868RvUUkgDKf31mGDtKsAYz2oz2AGutZYs',
        'index' => [0, 0],
        'child' => null,
        'address' => 'bc1qcr8te4kr609gcawutmrza0j4xv80jy8z306fyu',
        'coin' => 'btc',
    ], [
        'parent' => 'zpub6rFR7y4Q2AijBEqTUquhVz398htDFrtymD9xYYfG1m4wAcvPhXNfE3EfH1r1ADqtfSdVCToUG868RvUUkgDKf31mGDtKsAYz2oz2AGutZYs',
        'index' => [0, 1],
        'child' => null,
        'address' => 'bc1qnjg0jd8228aq7egyzacy8cys3knf9xvrerkf9g',
        'coin' => 'btc',
    ], [
        'parent' => 'zpub6rFR7y4Q2AijBEqTUquhVz398htDFrtymD9xYYfG1m4wAcvPhXNfE3EfH1r1ADqtfSdVCToUG868RvUUkgDKf31mGDtKsAYz2oz2AGutZYs',
        'index' => [1, 0],
        'child' => null,
        'address' => 'bc1q8c6fshw2dlwun7ekn9qwf37cu2rn755upcp6el',
        'coin' => 'btc',
    ], [
        'parent' => 'zpub6rFR7y4Q2AijBEqTUquhVz398htDFrtymD9xYYfG1m4wAcvPhXNfE3EfH1r1ADqtfSdVCToUG868RvUUkgDKf31mGDtKsAYz2oz2AGutZYs',
        'index' => [0, 19],
        'child' => null,
        'address' => 'bc1q27yd7vz8m5kz230wuyncfe3pyazez6ah58yzy0',
        'coin' => 'btc',
    ],
];

$vectors_invalid = [
    'xpub68Gmy5EdvgibQVfPdqkBBCHxA5htiqg56crXYuXoQRKfDBFA1WEjWgP6LHhwBZeKK1VTsfTFUHCdrfp1bgwQ9xv5ski8PX9rL2dZXvgGDnw',
    'tpubD6NzVbkrYhZ4Ymi1bLuVeV7QxdAJaqjZgrmbKZkE4xyF7SVb5dXhB2KNevFFYB54fPueAfEXx9D88wCX6RaCwJqGUu3tKjGuD3oAPblMVpG',
    'zpub6rFR7y4Q2AijBEqTUquhVz398htDFrtymD9xYYfG1m4wAcvPhXNfE3EfH1r1ADqtfSdVCToUG868RvUUkgDKf31mGDtKsAYz2oz2AGutZYe',
];

echo "\n" . 'Can derive correct xpubs and addresses:' . "\n";
foreach ($vectors as $c => $vector) {
    // Derive
    $derived_child = XPub::fromString($vector['parent'])->derive($vector['index']);
    $derived_xpub = $derived_child->toString();
    $derived_address = $derived_child->toAddress($vector['coin']);

    // Compare
    $is_equal_xpub = $vector['child'] ? $derived_xpub === $vector['child'] : true;
    $is_equal_address = $derived_address === $vector['address'];
    $passed = $is_equal_xpub && $is_equal_address;

    // Output
    echo 'Test ' . ($c + 1) . ': ' . ($passed ? 'OK!' : 'FAILED!') . "\n";
    if (!$passed) exit(1);
}

echo "\n" . 'Can detect invalid xpubs:' . "\n";
foreach ($vectors_invalid as $c => $vector) {
    $passed = false;
    try {
        $xpub = XPub::fromString($vector);
    } catch (Exception $e) {
        $passed = true;
    }

    // Output
    echo 'Test ' . ($c + 1) . ': ' . ($passed ? 'OK!' : 'FAILED!') . "\n";
    if (!$passed) exit(1);
}
